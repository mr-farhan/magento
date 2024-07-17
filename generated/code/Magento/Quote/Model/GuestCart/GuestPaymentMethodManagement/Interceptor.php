<?php
namespace Magento\Quote\Model\GuestCart\GuestPaymentMethodManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestPaymentMethodManagement
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestPaymentMethodManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($paymentMethodManagement, $quoteIdMaskFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function set($cartId, \Magento\Quote\Api\Data\PaymentInterface $method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'set');
        return $pluginInfo ? $this->___callPlugins('set', func_get_args(), $pluginInfo) : parent::set($cartId, $method);
    }
}
