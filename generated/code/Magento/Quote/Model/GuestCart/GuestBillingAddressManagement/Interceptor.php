<?php
namespace Magento\Quote\Model\GuestCart\GuestBillingAddressManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestBillingAddressManagement
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestBillingAddressManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\BillingAddressManagementInterface $billingAddressManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($billingAddressManagement, $quoteIdMaskFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function assign($cartId, \Magento\Quote\Api\Data\AddressInterface $address, $useForShipping = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        return $pluginInfo ? $this->___callPlugins('assign', func_get_args(), $pluginInfo) : parent::assign($cartId, $address, $useForShipping);
    }
}
