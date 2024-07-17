<?php
namespace Magento\PaymentServicesPaypal\Controller\Order\GetCurrentOrder;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Order\GetCurrentOrder
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Order\GetCurrentOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Session $checkoutSession, \Magento\PaymentServicesPaypal\Model\OrderService $orderService, \Magento\Framework\Controller\ResultFactory $resultFactory)
    {
        $this->___init();
        parent::__construct($checkoutSession, $orderService, $resultFactory);
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
