<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\CreatePaypalOrder;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\CreatePaypalOrder
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\CreatePaypalOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout)
    {
        $this->___init();
        parent::__construct($request, $resultFactory, $checkout);
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
