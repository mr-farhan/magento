<?php
namespace Magento\ServiceProxy\Controller\Adminhtml\Url\Redirect;

/**
 * Interceptor class for @see \Magento\ServiceProxy\Controller\Adminhtml\Url\Redirect
 */
class Interceptor extends \Magento\ServiceProxy\Controller\Adminhtml\Url\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Helper\Data $backendData, \Magento\Backend\Model\UrlInterface $backendUrl)
    {
        $this->___init();
        parent::__construct($context, $backendData, $backendUrl);
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
