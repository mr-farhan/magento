<?php
namespace Magento\ServicesIdGraphQlServer\Resolver\Mutation\ImsRegistration;

/**
 * Interceptor class for @see \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ImsRegistration
 */
class Interceptor extends \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ImsRegistration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ServicesId\Model\ServicesClientInterface $servicesClient, \Magento\ServicesId\Model\ServicesConfigInterface $servicesConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Backend\Model\UrlInterface $urlInterface, \Magento\Framework\Serialize\Serializer\Json $serializer)
    {
        $this->___init();
        parent::__construct($servicesClient, $servicesConfig, $scopeConfig, $urlInterface, $serializer);
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
