<?php
namespace Magento\Framework\Mview\View\Changelog;

/**
 * Interceptor class for @see \Magento\Framework\Mview\View\Changelog
 */
class Interceptor extends \Magento\Framework\Mview\View\Changelog implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\Mview\Config $mviewConfig, \Magento\Framework\Mview\View\AdditionalColumnsProcessor\ProcessorFactory $additionalColumnsProcessorFactory)
    {
        $this->___init();
        parent::__construct($resource, $mviewConfig, $additionalColumnsProcessorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create();
    }
}
