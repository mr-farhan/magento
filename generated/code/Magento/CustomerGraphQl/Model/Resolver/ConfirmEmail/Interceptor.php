<?php
namespace Magento\CustomerGraphQl\Model\Resolver\ConfirmEmail;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\ConfirmEmail
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\ConfirmEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Framework\Validator\EmailAddress $emailValidator, \Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData $extractCustomerData)
    {
        $this->___init();
        parent::__construct($accountManagement, $emailValidator, $extractCustomerData);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
