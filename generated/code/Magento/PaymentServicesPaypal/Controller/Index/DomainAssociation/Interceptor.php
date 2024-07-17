<?php
namespace Magento\PaymentServicesPaypal\Controller\Index\DomainAssociation;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Index\DomainAssociation
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Index\DomainAssociation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultPageFactory, \Magento\PaymentServicesPaypal\Model\Config $config)
    {
        $this->___init();
        parent::__construct($resultPageFactory, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
