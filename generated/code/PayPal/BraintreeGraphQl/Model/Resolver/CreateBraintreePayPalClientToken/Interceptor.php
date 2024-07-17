<?php
namespace PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalClientToken;

/**
 * Interceptor class for @see \PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalClientToken
 */
class Interceptor extends \PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalClientToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\PayPal\Braintree\Gateway\Config\Config $braintreeConfig, \PayPal\Braintree\Gateway\Config\PayPal\Config $config, \PayPal\Braintree\Model\Adapter\BraintreeAdapterFactory $adapterFactory)
    {
        $this->___init();
        parent::__construct($braintreeConfig, $config, $adapterFactory);
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
