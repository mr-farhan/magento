<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\PlaceOrder;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\PlaceOrder
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\PlaceOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\App\ResponseInterface $response, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout, \Magento\Framework\UrlInterface $url, \Magento\PaymentServicesPaypal\Model\CancellationService $cancellationService)
    {
        $this->___init();
        parent::__construct($request, $response, $messageManager, $checkout, $url, $cancellationService);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\App\ResponseInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
