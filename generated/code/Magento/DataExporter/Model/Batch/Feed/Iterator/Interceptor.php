<?php
namespace Magento\DataExporter\Model\Batch\Feed\Iterator;

/**
 * Interceptor class for @see \Magento\DataExporter\Model\Batch\Feed\Iterator
 */
class Interceptor extends \Magento\DataExporter\Model\Batch\Feed\Iterator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\DataExporter\Model\Batch\BatchLocator $batchLocator, \Magento\DataExporter\Model\Batch\BatchTable $batchTable, string $sourceTableName, array $sourceTableKeyColumns, ?bool $isRemovable = null)
    {
        $this->___init();
        parent::__construct($resourceConnection, $batchLocator, $batchTable, $sourceTableName, $sourceTableKeyColumns, $isRemovable);
    }

    /**
     * {@inheritdoc}
     */
    public function current() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'current');
        return $pluginInfo ? $this->___callPlugins('current', func_get_args(), $pluginInfo) : parent::current();
    }

    /**
     * {@inheritdoc}
     */
    public function valid() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'valid');
        return $pluginInfo ? $this->___callPlugins('valid', func_get_args(), $pluginInfo) : parent::valid();
    }
}
