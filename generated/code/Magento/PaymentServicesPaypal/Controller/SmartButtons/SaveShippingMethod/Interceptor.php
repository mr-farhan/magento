<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\SaveShippingMethod;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\SaveShippingMethod
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\SaveShippingMethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\ViewInterface $view, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\UrlInterface $url)
    {
        $this->___init();
        parent::__construct($request, $resultFactory, $view, $checkout, $messageManager, $url);
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
