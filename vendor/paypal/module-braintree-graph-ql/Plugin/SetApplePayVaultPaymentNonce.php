<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PayPal\BraintreeGraphQl\Plugin;

use Exception;
use Magento\Quote\Model\Quote;
use Magento\QuoteGraphQl\Model\Cart\SetPaymentMethodOnCart;
use PayPal\Braintree\Gateway\Command\GetPaymentNonceCommand;
use PayPal\Braintree\Model\ApplePay\Ui\ConfigProvider;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Psr\Log\LoggerInterface;

/**
 * Plugin creating nonce from Magento Vault Braintree ApplePay public hash
 */
class SetApplePayVaultPaymentNonce
{
    /**
     * @var GetPaymentNonceCommand
     */
    private GetPaymentNonceCommand $command;

    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @param GetPaymentNonceCommand $command
     * @param LoggerInterface $logger
     */
    public function __construct(GetPaymentNonceCommand $command, LoggerInterface $logger)
    {
        $this->command = $command;
        $this->logger = $logger;
    }

    /**
     * Set Braintree nonce from public hash
     *
     * @param SetPaymentMethodOnCart $subject
     * @param Quote $quote
     * @param array $paymentData
     * @return array
     * @throws GraphQlInputException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeExecute(SetPaymentMethodOnCart $subject, Quote $quote, array $paymentData): array
    {
        if ($paymentData['code'] !== ConfigProvider::METHOD_VAULT_CODE
            || !isset($paymentData[ConfigProvider::METHOD_VAULT_CODE]['public_hash'])
        ) {
            return [$quote, $paymentData];
        }

        $nonceData = [
            'public_hash' => $paymentData[ConfigProvider::METHOD_VAULT_CODE]['public_hash'],
            'customer_id' => $quote->getCustomerId(),
            'store_id' => $quote->getStoreId(),
        ];

        try {
            $nonceResult = $this->command->execute($nonceData);

            if ($nonceResult === null) {
                $this->logger->critical('Failed to get Braintree ApplePay Vault nonce');

                throw new GraphQlInputException(__('Sorry, but something went wrong'));
            }

            $result = $nonceResult->get();
            $paymentData[ConfigProvider::METHOD_VAULT_CODE]['payment_method_nonce'] = $result['paymentMethodNonce'];
        } catch (Exception $e) {
            $this->logger->critical($e);

            throw new GraphQlInputException(__('Sorry, but something went wrong'));
        }

        return [$quote, $paymentData];
    }
}
