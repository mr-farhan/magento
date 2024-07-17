<?php
namespace Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\SourceItem\GetSkuListInStock $getSkuListInStockToUpdate, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexStructureInterface $indexStructureHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexHandlerInterface $indexHandler, \Magento\InventoryIndexer\Indexer\SourceItem\IndexDataBySkuListProvider $indexDataBySkuListProvider, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexNameBuilder $indexNameBuilder, \Magento\InventoryIndexer\Indexer\Stock\StockIndexer $stockIndexer, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryIndexer\Indexer\Stock\ReservationsIndexTable $reservationsIndexTable, \Magento\InventoryIndexer\Indexer\Stock\PrepareReservationsIndexData $prepareReservationsIndexData, \Magento\InventoryIndexer\Indexer\SourceItem\GetSalableStatuses $getSalableStatuses, array $saleabilityChangesProcessorsPool = [])
    {
        $this->___init();
        parent::__construct($getSkuListInStockToUpdate, $indexStructureHandler, $indexHandler, $indexDataBySkuListProvider, $indexNameBuilder, $stockIndexer, $defaultStockProvider, $reservationsIndexTable, $prepareReservationsIndexData, $getSalableStatuses, $saleabilityChangesProcessorsPool);
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $sourceItemIds) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($sourceItemIds);
    }
}
