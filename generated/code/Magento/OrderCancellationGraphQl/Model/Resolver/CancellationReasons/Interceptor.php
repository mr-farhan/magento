<?php
namespace Magento\OrderCancellationGraphQl\Model\Resolver\CancellationReasons;

/**
 * Interceptor class for @see \Magento\OrderCancellationGraphQl\Model\Resolver\CancellationReasons
 */
class Interceptor extends \Magento\OrderCancellationGraphQl\Model\Resolver\CancellationReasons implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
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
