<?php
namespace Magento\AdminGraphQlServer\Resolver\Query\CommerceResolver;

/**
 * Interceptor class for @see \Magento\AdminGraphQlServer\Resolver\Query\CommerceResolver
 */
class Interceptor extends \Magento\AdminGraphQlServer\Resolver\Query\CommerceResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ProductMetadataInterface $productMetadata)
    {
        $this->___init();
        parent::__construct($productMetadata);
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
