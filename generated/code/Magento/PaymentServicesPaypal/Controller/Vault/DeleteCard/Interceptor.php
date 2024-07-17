<?php
namespace Magento\PaymentServicesPaypal\Controller\Vault\DeleteCard;

/**
 * Interceptor class for @see \Magento\PaymentServicesPaypal\Controller\Vault\DeleteCard
 */
class Interceptor extends \Magento\PaymentServicesPaypal\Controller\Vault\DeleteCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Vault\Api\PaymentTokenManagementInterface $paymentTokenManagement, \Magento\PaymentServicesPaypal\Model\VaultService $vaultService)
    {
        $this->___init();
        parent::__construct($customerSession, $messageManager, $request, $resultFactory, $paymentTokenManagement, $vaultService);
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
