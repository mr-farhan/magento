<?php
namespace Magento\PaymentServicesPaypalGraphQl\Model\Resolver\SyncPaymentOrder;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypalGraphQl\Model\Resolver\SyncPaymentOrder
 */
class Interceptor extends \Magento\PaymentServicesPaypalGraphQl\Model\Resolver\SyncPaymentOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PaymentServicesPaypal\Api\PaymentOrderManagementInterface $paymentOrderManagement, \Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId)
    {
        $this->___init();
        parent::__construct($paymentOrderManagement, $maskedQuoteIdToQuoteId);
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
