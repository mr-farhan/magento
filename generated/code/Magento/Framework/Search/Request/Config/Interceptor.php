<?php
namespace Magento\Framework\Search\Request\Config;

/**
 * Interceptor class for @see \Magento\Framework\Search\Request\Config
 */
class Interceptor extends \Magento\Framework\Search\Request\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Search\Request\Config\FilesystemReader $reader, \Magento\Framework\Config\CacheInterface $cache, $cacheId = 'request_declaration', ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, ?array $cacheTags = null)
    {
        $this->___init();
        parent::__construct($reader, $cache, $cacheId, $serializer, $cacheTags);
    }

    /**
     * {@inheritdoc}
     */
    public function get($path = null, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($path, $default);
    }
}
