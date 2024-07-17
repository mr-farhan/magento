<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdateQuote;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdateQuote
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\UpdateQuote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PaymentServicesPaypal\Model\OrderService $orderService, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout\AddressConverter $addressConverter, \Magento\Framework\UrlInterface $url)
    {
        $this->___init();
        parent::__construct($orderService, $request, $resultFactory, $checkout, $addressConverter, $url);
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
