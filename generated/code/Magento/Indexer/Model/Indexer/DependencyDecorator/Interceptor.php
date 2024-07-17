<?php
namespace Magento\Indexer\Model\Indexer\DependencyDecorator;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer\DependencyDecorator
 */
class Interceptor extends \Magento\Indexer\Model\Indexer\DependencyDecorator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\IndexerInterface $indexer, \Magento\Framework\Indexer\Config\DependencyInfoProviderInterface $dependencyInfoProvider, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, ?\Magento\Indexer\Model\Indexer\DeferredCacheCleaner $cacheCleaner = null)
    {
        $this->___init();
        parent::__construct($indexer, $dependencyInfoProvider, $indexerRegistry, $cacheCleaner);
    }

    /**
     * {@inheritdoc}
     */
    public function setScheduled($scheduled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setScheduled');
        return $pluginInfo ? $this->___callPlugins('setScheduled', func_get_args(), $pluginInfo) : parent::setScheduled($scheduled);
    }
}
