<?php
namespace Magento\QuoteGraphQl\Model\Resolver\EstimateTotals;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\EstimateTotals
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\EstimateTotals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Model\Quote\AddressFactory $addressFactory, \Magento\Checkout\Api\TotalsInformationManagementInterface $totalsInformationManagement, \Magento\Checkout\Api\Data\TotalsInformationInterfaceFactory $totalsInformationFactory)
    {
        $this->___init();
        parent::__construct($maskedQuoteIdToQuoteId, $cartRepository, $addressFactory, $totalsInformationManagement, $totalsInformationFactory);
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
