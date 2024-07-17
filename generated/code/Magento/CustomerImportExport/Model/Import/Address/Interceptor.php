<?php
namespace Magento\CustomerImportExport\Model\Import\Address;

/**
 * Interceptor class for @see \Magento\CustomerImportExport\Model\Import\Address
 */
class Interceptor extends \Magento\CustomerImportExport\Model\Import\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\ImportExport\Model\ImportFactory $importFactory, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\ImportExport\Model\Export\Factory $collectionFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\CustomerImportExport\Model\ResourceModel\Import\Customer\StorageFactory $storageFactory, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionColFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Model\ResourceModel\Address\Attribute\CollectionFactory $attributesFactory, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Model\Address\Validator\Postcode $postcodeValidator, array $data = [], ?\Magento\Customer\Model\ResourceModel\Address\Attribute\Source\CountryWithWebsites $countryWithWebsites = null, ?\Magento\CustomerImportExport\Model\ResourceModel\Import\Address\Storage $addressStorage = null, ?\Magento\Customer\Model\Indexer\Processor $indexerProcessor = null)
    {
        $this->___init();
        parent::__construct($string, $scopeConfig, $importFactory, $resourceHelper, $resource, $errorAggregator, $storeManager, $collectionFactory, $eavConfig, $storageFactory, $addressFactory, $regionColFactory, $customerFactory, $attributesFactory, $dateTime, $postcodeValidator, $data, $countryWithWebsites, $addressStorage, $indexerProcessor);
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
