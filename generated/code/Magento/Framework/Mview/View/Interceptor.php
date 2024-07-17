<?php
namespace Magento\Framework\Mview\View;

/**
 * Interceptor class for @see \Magento\Framework\Mview\View
 */
class Interceptor extends \Magento\Framework\Mview\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mview\ConfigInterface $config, \Magento\Framework\Mview\ActionFactory $actionFactory, \Magento\Framework\Mview\View\StateInterface $state, \Magento\Framework\Mview\View\ChangelogInterface $changelog, \Magento\Framework\Mview\View\SubscriptionFactory $subscriptionFactory, array $data = [], array $changelogBatchSize = [], ?\Magento\Framework\Mview\View\ChangelogBatchWalkerFactory $changelogBatchWalkerFactory = null)
    {
        $this->___init();
        parent::__construct($config, $actionFactory, $state, $changelog, $subscriptionFactory, $data, $changelogBatchSize, $changelogBatchWalkerFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function update()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update();
    }
}
