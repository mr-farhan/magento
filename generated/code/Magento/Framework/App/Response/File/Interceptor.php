<?php
namespace Magento\Framework\App\Response\File;

/**
 * Interceptor class for @see \Magento\Framework\App\Response\File
 */
class Interceptor extends \Magento\Framework\App\Response\File implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\Http\Context $context, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\App\Response\Http $response, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Driver\File\Mime $mime, array $options = [])
    {
        $this->___init();
        parent::__construct($request, $cookieManager, $cookieMetadataFactory, $context, $dateTime, $sessionConfig, $response, $filesystem, $mime, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendResponse');
        return $pluginInfo ? $this->___callPlugins('sendResponse', func_get_args(), $pluginInfo) : parent::sendResponse();
    }
}
