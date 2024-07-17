<?php
namespace Magento\CustomerImportExport\Model\Import\CustomerComposite;

/**
 * Interceptor class for @see \Magento\CustomerImportExport\Model\Import\CustomerComposite
 */
class Interceptor extends \Magento\CustomerImportExport\Model\Import\CustomerComposite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\ImportExport\Model\ImportFactory $importFactory, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\CustomerImportExport\Model\ResourceModel\Import\CustomerComposite\DataFactory $dataFactory, \Magento\CustomerImportExport\Model\Import\CustomerFactory $customerFactory, \Magento\CustomerImportExport\Model\Import\AddressFactory $addressFactory, \Magento\Customer\Model\Indexer\Processor $indexerProcessor, array $data = [])
    {
        $this->___init();
        parent::__construct($string, $scopeConfig, $importFactory, $resourceHelper, $resource, $errorAggregator, $dataFactory, $customerFactory, $addressFactory, $indexerProcessor, $data);
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
