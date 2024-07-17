<?php
namespace Magento\ServiceProxy\Controller\Adminhtml\Service\Proxy;

/**
 * Interceptor class for @see \Magento\ServiceProxy\Controller\Adminhtml\Service\Proxy
 */
class Interceptor extends \Magento\ServiceProxy\Controller\Adminhtml\Service\Proxy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\UrlInterface $backenUrl, \Psr\Log\LoggerInterface $logger, array $servicesList = [], array $servicesClients = [], array $acceptedHeaderTypes = [])
    {
        $this->___init();
        parent::__construct($context, $backenUrl, $logger, $servicesList, $servicesClients, $acceptedHeaderTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\App\ResponseInterface
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
