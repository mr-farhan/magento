<?php
namespace Magento\Framework\App\Config\Storage\Writer;

/**
 * Interceptor class for @see \Magento\Framework\App\Config\Storage\Writer
 */
class Interceptor extends \Magento\Framework\App\Config\Storage\Writer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ConfigResource\ConfigInterface $resource)
    {
        $this->___init();
        parent::__construct($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function save($path, $value, $scope = 'default', $scopeId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($path, $value, $scope, $scopeId);
    }
}
