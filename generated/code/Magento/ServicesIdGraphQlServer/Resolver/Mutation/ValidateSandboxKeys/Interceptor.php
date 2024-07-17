<?php
namespace Magento\ServicesIdGraphQlServer\Resolver\Mutation\ValidateSandboxKeys;

/**
 * Interceptor class for @see \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ValidateSandboxKeys
 */
class Interceptor extends \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ValidateSandboxKeys implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ServicesId\Model\MerchantRegistryConnectionValidator $connectionValidator)
    {
        $this->___init();
        parent::__construct($connectionValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
