<?php
namespace Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway;

/**
 * Interceptor class for @see \Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway
 */
class Interceptor extends \Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Serialize\SerializerInterface $jsonSerializer, \Magento\Framework\GraphQl\Exception\ExceptionFormatter $graphQlError, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\GraphQlServer\Model\Server $server, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($jsonSerializer, $graphQlError, $jsonFactory, $server, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
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
