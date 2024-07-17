<?php
namespace Magento\QuoteGraphQl\Model\Resolver\EstimateShippingMethods;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\EstimateShippingMethods
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\EstimateShippingMethods implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Model\Quote\AddressFactory $addressFactory, \Magento\Quote\Api\ShipmentEstimationInterface $shipmentEstimation, \Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter, \Magento\Quote\Model\Cart\ShippingMethodConverter $shippingMethodConverter, \Magento\QuoteGraphQl\Model\FormatMoneyTypeData $formatMoneyTypeData)
    {
        $this->___init();
        parent::__construct($maskedQuoteIdToQuoteId, $cartRepository, $addressFactory, $shipmentEstimation, $dataObjectConverter, $shippingMethodConverter, $formatMoneyTypeData);
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
