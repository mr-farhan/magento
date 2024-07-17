<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\Success;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\Success
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Checkout\Model\Session\SuccessValidator $successValidator, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->___init();
        parent::__construct($resultFactory, $successValidator, $eventManager, $checkoutSession);
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
