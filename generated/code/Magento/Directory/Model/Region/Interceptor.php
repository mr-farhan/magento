<?php
namespace Magento\Directory\Model\Region;

/**
 * Interceptor class for @see \Magento\Directory\Model\Region
 */
class Interceptor extends \Magento\Directory\Model\Region implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByName($name, $countryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByName');
        return $pluginInfo ? $this->___callPlugins('loadByName', func_get_args(), $pluginInfo) : parent::loadByName($name, $countryId);
    }
}
