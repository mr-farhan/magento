<?php
namespace Magento\Vault\Model\Method\Vault;

/**
 * Interceptor class for @see \Magento\Vault\Model\Method\Vault
 */
class Interceptor extends \Magento\Vault\Model\Method\Vault implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Payment\Gateway\ConfigInterface $config, \Magento\Payment\Gateway\ConfigFactoryInterface $configFactory, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Payment\Model\MethodInterface $vaultProvider, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Payment\Gateway\Config\ValueHandlerPoolInterface $valueHandlerPool, \Magento\Payment\Gateway\Command\CommandManagerPoolInterface $commandManagerPool, \Magento\Vault\Api\PaymentTokenManagementInterface $tokenManagement, \Magento\Sales\Api\Data\OrderPaymentExtensionInterfaceFactory $paymentExtensionFactory, $code, ?\Magento\Framework\Serialize\Serializer\Json $jsonSerializer = null)
    {
        $this->___init();
        parent::__construct($config, $configFactory, $objectManager, $vaultProvider, $eventManager, $valueHandlerPool, $commandManagerPool, $tokenManagement, $paymentExtensionFactory, $code, $jsonSerializer);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseInternal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseInternal');
        return $pluginInfo ? $this->___callPlugins('canUseInternal', func_get_args(), $pluginInfo) : parent::canUseInternal();
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable(?\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        return $pluginInfo ? $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo) : parent::isAvailable($quote);
    }
}
