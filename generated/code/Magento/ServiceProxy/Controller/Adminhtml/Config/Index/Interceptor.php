<?php
namespace Magento\ServiceProxy\Controller\Adminhtml\Config\Index;

/**
 * Interceptor class for @see \Magento\ServiceProxy\Controller\Adminhtml\Config\Index
 */
class Interceptor extends \Magento\ServiceProxy\Controller\Adminhtml\Config\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Config\Storage\WriterInterface $configWriter, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Framework\App\Cache\TypeListInterface $typeList, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\CacheInterface $cache, array $configPaths = [], array $cacheInvalidationPatterns = [])
    {
        $this->___init();
        parent::__construct($context, $configWriter, $jsonFactory, $scopeConfig, $serializer, $typeList, $storeManager, $cache, $configPaths, $cacheInvalidationPatterns);
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
