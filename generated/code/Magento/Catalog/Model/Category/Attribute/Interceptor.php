<?php
namespace Magento\Catalog\Model\Category\Attribute;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category\Attribute
 */
class Interceptor extends \Magento\Catalog\Model\Category\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\Entity\TypeFactory $eavTypeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Eav\Api\Data\AttributeOptionInterfaceFactory $optionDataFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Catalog\Model\Product\ReservedAttributeList $reservedAttributeList, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, \Magento\Catalog\Model\Attribute\LockValidatorInterface $lockValidator, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $eavConfig, $eavTypeFactory, $storeManager, $resourceHelper, $universalFactory, $optionDataFactory, $dataObjectProcessor, $dataObjectHelper, $localeDate, $reservedAttributeList, $localeResolver, $dateTimeFormatter, $lockValidator, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }
}
