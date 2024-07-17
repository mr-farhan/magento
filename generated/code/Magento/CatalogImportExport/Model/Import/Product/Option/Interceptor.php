<?php
namespace Magento\CatalogImportExport\Model\Import\Product\Option;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\Import\Product\Option
 */
class Interceptor extends \Magento\CatalogImportExport\Model\Import\Product\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Store\Model\StoreManagerInterface $_storeManager, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ResourceModel\Product\Option\CollectionFactory $optionColFactory, \Magento\ImportExport\Model\ResourceModel\CollectionByPagesIteratorFactory $colIteratorFactory, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $dateTime, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, array $data = [], ?\Magento\Catalog\Model\ResourceModel\Product\Option\Value\CollectionFactory $productOptionValueCollectionFactory = null, ?\Magento\Framework\Model\ResourceModel\Db\TransactionManagerInterface $transactionManager = null, ?\Magento\CatalogImportExport\Model\Import\Product\SkuStorage $skuStorage = null)
    {
        $this->___init();
        parent::__construct($importData, $resource, $resourceHelper, $_storeManager, $productFactory, $optionColFactory, $colIteratorFactory, $catalogData, $scopeConfig, $dateTime, $errorAggregator, $data, $productOptionValueCollectionFactory, $transactionManager, $skuStorage);
    }

    /**
     * {@inheritdoc}
     */
    public function isNeedToLogInHistory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isNeedToLogInHistory');
        return $pluginInfo ? $this->___callPlugins('isNeedToLogInHistory', func_get_args(), $pluginInfo) : parent::isNeedToLogInHistory();
    }
}
