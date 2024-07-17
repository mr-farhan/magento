<?php
namespace Magento\CustomerImportExport\Model\Import\Customer;

/**
 * Interceptor class for @see \Magento\CustomerImportExport\Model\Import\Customer
 */
class Interceptor extends \Magento\CustomerImportExport\Model\Import\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\ImportExport\Model\ImportFactory $importFactory, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\ImportExport\Model\Export\Factory $collectionFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\CustomerImportExport\Model\ResourceModel\Import\Customer\StorageFactory $storageFactory, \Magento\Customer\Model\ResourceModel\Attribute\CollectionFactory $attrCollectionFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, array $data = [], ?\Magento\Customer\Model\Indexer\Processor $indexerProcessor = null)
    {
        $this->___init();
        parent::__construct($string, $scopeConfig, $importFactory, $resourceHelper, $resource, $errorAggregator, $storeManager, $collectionFactory, $eavConfig, $storageFactory, $attrCollectionFactory, $customerFactory, $data, $indexerProcessor);
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
