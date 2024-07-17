<?php
namespace Magento\InstantPurchase\Model\QuoteManagement\PaymentConfiguration;

/**
 * Interceptor class for @see \Magento\InstantPurchase\Model\QuoteManagement\PaymentConfiguration
 */
class Interceptor extends \Magento\InstantPurchase\Model\QuoteManagement\PaymentConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InstantPurchase\PaymentMethodIntegration\IntegrationsManager $integrationsManager)
    {
        $this->___init();
        parent::__construct($integrationsManager);
    }

    /**
     * {@inheritdoc}
     */
    public function configurePayment(\Magento\Quote\Model\Quote $quote, \Magento\Vault\Api\Data\PaymentTokenInterface $paymentToken) : \Magento\Quote\Model\Quote
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'configurePayment');
        return $pluginInfo ? $this->___callPlugins('configurePayment', func_get_args(), $pluginInfo) : parent::configurePayment($quote, $paymentToken);
    }
}
