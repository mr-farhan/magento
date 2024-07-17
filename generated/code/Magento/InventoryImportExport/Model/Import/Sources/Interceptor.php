<?php
namespace Magento\InventoryImportExport\Model\Import\Sources;

/**
 * Interceptor class for @see \Magento\InventoryImportExport\Model\Import\Sources
 */
class Interceptor extends \Magento\InventoryImportExport\Model\Import\Sources implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryImportExport\Model\Import\Serializer\Json $jsonHelper, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\ImportExport\Helper\Data $dataHelper, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\InventoryImportExport\Model\Import\Validator\ValidatorInterface $validator, array $commands = [], ?\Magento\InventoryApi\Model\GetSourceCodesBySkusInterface $getSourceCodesBySkus = null)
    {
        $this->___init();
        parent::__construct($jsonHelper, $errorAggregator, $resourceHelper, $dataHelper, $importData, $validator, $commands, $getSourceCodesBySkus);
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
