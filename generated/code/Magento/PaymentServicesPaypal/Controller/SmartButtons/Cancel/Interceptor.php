<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\Cancel;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\Cancel
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Checkout\Model\Session $checkoutSession, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Session\Generic $paypalSession)
    {
        $this->___init();
        parent::__construct($resultFactory, $quoteRepository, $checkoutSession, $logger, $paypalSession);
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
