<?php
namespace Magento\PaymentServicesPaypal\Controller\Adminhtml\Order\Create;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Adminhtml\Order\Create
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Adminhtml\Order\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Session\Quote $quoteSession, \Magento\PaymentServicesPaypal\Model\OrderService $orderService, \Magento\PaymentServicesPaypal\Helper\OrderHelper $orderHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository)
    {
        $this->___init();
        parent::__construct($context, $quoteSession, $orderService, $orderHelper, $quoteRepository, $orderRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
