<?php
namespace Magento\PaymentServicesPaypal\Controller\Order\Create;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Order\Create
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Order\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\PaymentServicesPaypal\Model\OrderService $orderService, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\PaymentServicesPaypal\Helper\OrderHelper $orderHelper)
    {
        $this->___init();
        parent::__construct($checkoutSession, $customerSession, $orderService, $resultFactory, $request, $quoteRepository, $orderHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
