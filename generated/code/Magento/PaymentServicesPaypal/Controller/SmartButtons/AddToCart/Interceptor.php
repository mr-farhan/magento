<?php
namespace Magento\PaymentServicesPaypal\Controller\SmartButtons\AddToCart;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\SmartButtons\AddToCart
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\SmartButtons\AddToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\App\ResponseInterface $response, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Session\Generic $paypalSession, \Magento\Quote\Api\Data\CartInterfaceFactory $quoteFactory, \Magento\Checkout\Model\Cart $cart, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\UrlInterface $url, \Psr\Log\LoggerInterface $logger, \Magento\Checkout\Helper\Data $checkoutHelper)
    {
        $this->___init();
        parent::__construct($request, $response, $checkoutSession, $customerSession, $paypalSession, $quoteFactory, $cart, $productRepository, $formKeyValidator, $storeManager, $localeResolver, $messageManager, $eventManager, $escaper, $url, $logger, $checkoutHelper);
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
