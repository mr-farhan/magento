<?php
namespace PayPal\Braintree\Model\Adapter\PaymentMethod;

/**
 * Factory class for @see \PayPal\Braintree\Model\Adapter\PaymentMethod\BraintreePaymentTokenAdapter
 */
class BraintreePaymentTokenAdapterFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\PayPal\\Braintree\\Model\\Adapter\\PaymentMethod\\BraintreePaymentTokenAdapter')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \PayPal\Braintree\Model\Adapter\PaymentMethod\BraintreePaymentTokenAdapter
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
