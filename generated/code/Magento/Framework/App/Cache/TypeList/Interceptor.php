<?php
namespace Magento\Framework\App\Cache\TypeList;

/**
 * Interceptor class for @see \Magento\Framework\App\Cache\TypeList
 */
class Interceptor extends \Magento\Framework\App\Cache\TypeList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Cache\ConfigInterface $config, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\App\Cache\InstanceFactory $factory, \Magento\Framework\App\CacheInterface $cache, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($config, $cacheState, $factory, $cache, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function cleanType($typeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanType');
        return $pluginInfo ? $this->___callPlugins('cleanType', func_get_args(), $pluginInfo) : parent::cleanType($typeCode);
    }
}
