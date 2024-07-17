<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\PaymentServicesSaaSExport\Cron;

use Magento\SaaSCommon\Cron\SubmitFeedInterface;
use Magento\SaaSCommon\Model\Exception\UnableSendData;
use Magento\DataExporter\Model\FeedPool;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\FlagManager;
use Magento\Framework\Module\ModuleList;
use Magento\SaaSCommon\Model\FeedRegistry;
use Magento\PaymentServicesSaaSExport\Model\Http\Command\SubmitFeed as HttpCommandSubmitFeed;
use Magento\ServicesConnector\Exception\PrivateKeySignException;
use Magento\ServicesConnector\Model\Environment;
use Psr\Log\LoggerInterface;
use Magento\PaymentServicesBase\Model\OnboardingStatus;

/**
 * Class to execute submitting data feed
 */
class SubmitFeed implements SubmitFeedInterface
{
    /**
     * @var HttpCommandSubmitFeed
     */
    private $submitFeed;

    /**
     * @var ModuleList
     */
    private $moduleList;

    /**
     * @var FeedPool
     */
    private $feedPool;

    /**
     * @var FlagManager
     */
    private $flagManager;

    /**
     * @var FeedRegistry
     */
    private $feedRegistry;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ScopeConfigInterface
     */
    private $config;

    /**
     * @var OnboardingStatus
     */
    private $onboardingStatus;

    /**
     * @var string
     */
    private $feedName;

    /**
     * @var string
     */
    private $feedSyncFlag;

    /**
     * @var string
     */
    private $environment;

    /**
     * @var int
     */
    private static $chunkSize = 100;

    /**
     * @var int
     */
    private static $iterations = 5;

    /**
     * @param FeedPool $feedPool
     * @param HttpCommandSubmitFeed $submitFeed
     * @param ModuleList $moduleList
     * @param FlagManager $flagManager
     * @param FeedRegistry $feedRegistry
     * @param LoggerInterface $logger
     * @param ScopeConfigInterface $config
     * @param OnboardingStatus $onboardingStatus
     * @param string $feedName
     * @param string $feedSyncFlag
     * @param string $environment
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        FeedPool $feedPool,
        HttpCommandSubmitFeed $submitFeed,
        ModuleList $moduleList,
        FlagManager $flagManager,
        FeedRegistry $feedRegistry,
        LoggerInterface $logger,
        ScopeConfigInterface $config,
        OnboardingStatus $onboardingStatus,
        string $feedName,
        string $feedSyncFlag,
        string $environment
    ) {
        $this->feedPool = $feedPool;
        $this->submitFeed = $submitFeed;
        $this->moduleList = $moduleList;
        $this->flagManager = $flagManager;
        $this->feedRegistry = $feedRegistry;
        $this->logger = $logger;
        $this->config = $config;
        $this->onboardingStatus = $onboardingStatus;
        $this->feedName = $feedName;
        $this->feedSyncFlag = $feedSyncFlag;
        $this->environment = $environment;
    }

    /**
     * Submit feed data
     *
     * @param array $data
     * @return bool
     * @throws UnableSendData|PrivateKeySignException
     */
    public function submitFeed(array $data) : bool
    {
        $result = true;
        if (!$this->onboardingStatus->isOnboarded($this->environment)) {
            $this->logger->info(
                sprintf(
                    'Can\'t submit %s feed. Onboarding is incomplete for %s environment',
                    $this->feedName,
                    $this->environment
                )
            );
            return false;
        }
        $chunks = array_chunk($data['feed'], self::$chunkSize);
        foreach ($chunks as $chunk) {
            $filteredData = $this->feedRegistry->filter($chunk);
            if (!empty($filteredData)) {
                $result = $this->submitFeed->execute(
                    $this->feedName,
                    $filteredData
                );
                if (!$result) {
                    return $result;
                } else {
                    $this->feedRegistry->registerFeed($filteredData);
                }
            }
        }
        return $result;
    }

    /**
     * Iteration of data submission
     *
     * @throws \Zend_Db_Statement_Exception
     */
    private function iteration()
    {
        $result = true;
        $lastSyncTimestamp = $this->flagManager->getFlagData($this->feedSyncFlag);
        $feed = $this->feedPool->getFeed($this->feedName);
        $data = $feed->getFeedSince($lastSyncTimestamp ? $lastSyncTimestamp : '1');
        try {
            if ($data['recentTimestamp'] !== null) {
                $result = $this->submitFeed($data);
                if ($result) {
                    $this->flagManager->saveFlag($this->feedSyncFlag, $data['recentTimestamp']);
                }
            }
        } catch (\Exception $exception) {
            $this->logger->error($exception->getMessage());
        }
        return $result;
    }

    /**
     * Site verification and claiming
     *
     * @throws \Zend_Db_Statement_Exception
     */
    public function execute()
    {
        $key = $this->config->getValue(str_replace('{env}', $this->environment, Environment::API_KEY_PATH));
        if ($key && $this->onboardingStatus->isOnboarded($this->environment)) {
            for ($i=0; $i < self::$iterations; $i++) {
                $this->iteration();
            }
        }
    }
}
