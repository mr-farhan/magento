<?php
namespace PayPal\Braintree\Gateway\Request\Level23ProcessingDataBuilder;

/**
 * Interceptor class for @see \PayPal\Braintree\Gateway\Request\Level23ProcessingDataBuilder
 */
class Interceptor extends \PayPal\Braintree\Gateway\Request\Level23ProcessingDataBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\PayPal\Braintree\Gateway\Helper\SubjectReader $subjectReader, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Directory\Model\Country $country, \PayPal\Braintree\Gateway\Config\Config $braintreeConfig, \PayPal\Braintree\Gateway\Config\PayPal\Config $payPalConfig)
    {
        $this->___init();
        parent::__construct($subjectReader, $scopeConfig, $country, $braintreeConfig, $payPalConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function build(array $buildSubject) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($buildSubject);
    }
}
