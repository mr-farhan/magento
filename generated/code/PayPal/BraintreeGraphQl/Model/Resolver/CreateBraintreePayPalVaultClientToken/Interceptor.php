<?php
namespace PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalVaultClientToken;

/**
 * Interceptor class for @see \PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalVaultClientToken
 */
class Interceptor extends \PayPal\BraintreeGraphQl\Model\Resolver\CreateBraintreePayPalVaultClientToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Vault\Api\PaymentTokenManagementInterface $paymentTokenManagement, \PayPal\Braintree\Gateway\Config\Config $braintreeConfig, \PayPal\Braintree\Gateway\Config\PayPalVault\Config $config, \PayPal\Braintree\Model\Adapter\BraintreeAdapterFactory $adapterFactory, \PayPal\Braintree\Gateway\DataResolver\Customer\GetCustomerIdByPaymentTokenInterface $getCustomerIdByPaymentToken)
    {
        $this->___init();
        parent::__construct($paymentTokenManagement, $braintreeConfig, $config, $adapterFactory, $getCustomerIdByPaymentToken);
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
