<?php
namespace Magento\SalesGraphQl\Model\Resolver\GuestOrder;

/**
 * Interceptor class for @see \Magento\SalesGraphQl\Model\Resolver\GuestOrder
 */
class Interceptor extends \Magento\SalesGraphQl\Model\Resolver\GuestOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesGraphQl\Model\Formatter\Order $orderFormatter, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Framework\Api\SearchCriteriaBuilderFactory $searchCriteriaBuilderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\SalesGraphQl\Model\Order\Token $token)
    {
        $this->___init();
        parent::__construct($orderFormatter, $orderRepository, $searchCriteriaBuilderFactory, $storeManager, $token);
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
