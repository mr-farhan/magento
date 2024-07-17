<?php
namespace Magento\Framework\Mview\Processor;

/**
 * Interceptor class for @see \Magento\Framework\Mview\Processor
 */
class Interceptor extends \Magento\Framework\Mview\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mview\View\CollectionFactory $viewsFactory)
    {
        $this->___init();
        parent::__construct($viewsFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function update($group = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($group);
    }
}
