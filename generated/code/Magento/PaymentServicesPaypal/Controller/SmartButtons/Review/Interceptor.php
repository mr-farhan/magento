<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\Review;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\Review
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\PaymentServicesPaypal\Model\SmartButtons\Checkout $checkout)
    {
        $this->___init();
        parent::__construct($resultFactory, $messageManager, $checkout);
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
