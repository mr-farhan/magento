<?php
namespace Magento\SalesRuleGraphQl\Model\Resolver\Coupon;

/**
 * Interceptor class for @see \Magento\SalesRuleGraphQl\Model\Resolver\Coupon
 */
class Interceptor extends \Magento\SalesRuleGraphQl\Model\Resolver\Coupon implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SalesRule\Model\Quote\GetCouponCodes $getCouponCodes, \Magento\SalesRule\Model\GetCoupons $getCoupons)
    {
        $this->___init();
        parent::__construct($getCouponCodes, $getCoupons);
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
