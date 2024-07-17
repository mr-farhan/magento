<?php
namespace Magento\SaaSCommon\Console\Command\Resync;

/**
 * Interceptor class for @see \Magento\SaaSCommon\Console\Command\Resync
 */
class Interceptor extends \Magento\SaaSCommon\Console\Command\Resync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SaaSCommon\Model\ResyncManagerPool $resyncManagerPool, \Magento\SaaSCommon\Model\ResyncOptions $resyncOptions, $name = '', ?\Magento\DataExporter\Model\FeedMetadataPool $feedMetadataPool = null, ?\Magento\SaaSCommon\Console\ProgressBarManager $progressBarManager = null, ?\Magento\DataExporter\Model\Indexer\ConfigOptionsHandler $configOptionsHandler = null, array $feedNames = [])
    {
        $this->___init();
        parent::__construct($resyncManagerPool, $resyncOptions, $name, $feedMetadataPool, $progressBarManager, $configOptionsHandler, $feedNames);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
