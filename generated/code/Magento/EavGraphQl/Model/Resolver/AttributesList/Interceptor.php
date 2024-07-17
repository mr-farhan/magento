<?php
namespace Magento\EavGraphQl\Model\Resolver\AttributesList;

/**
 * Interceptor class for @see \Magento\EavGraphQl\Model\Resolver\AttributesList
 */
class Interceptor extends \Magento\EavGraphQl\Model\Resolver\AttributesList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\EnumLookup $enumLookup, \Magento\EavGraphQl\Model\Output\GetAttributeDataInterface $getAttributeData, \Magento\EavGraphQl\Model\Resolver\GetFilteredAttributes $getFilteredAttributes)
    {
        $this->___init();
        parent::__construct($enumLookup, $getAttributeData, $getFilteredAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
