<?php
namespace Magento\ServicesIdGraphQlServer\Resolver\Mutation\ServicesApiRequest;

/**
 * Interceptor class for @see \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ServicesApiRequest
 */
class Interceptor extends \Magento\ServicesIdGraphQlServer\Resolver\Mutation\ServicesApiRequest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ServicesId\Model\ServicesClientInterface $servicesClient, \Magento\Framework\Serialize\Serializer\Json $serializer, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($servicesClient, $serializer, $logger);
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
