<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace PayPal\BraintreeGraphQl\Model;

use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\QuoteGraphQl\Model\Cart\Payment\AdditionalDataProviderInterface;
use PayPal\Braintree\Model\Ach\Ui\ConfigProvider;

class BraintreeAchVaultDataProvider implements AdditionalDataProviderInterface
{
    /**
     * Format Braintree input into value expected when setting payment method
     *
     * @param array $data
     * @return array
     * @throws GraphQlInputException
     */
    public function getData(array $data): array
    {
        if (!isset($data[ConfigProvider::METHOD_VAULT_CODE])) {
            throw new GraphQlInputException(
                __('Required parameter "' . ConfigProvider::METHOD_VAULT_CODE . '" for "payment_method" is missing.')
            );
        }

        if (!isset($data[ConfigProvider::METHOD_VAULT_CODE]['public_hash'])) {
            throw new GraphQlInputException(
                __('Required parameter "public_hash" for "' . ConfigProvider::METHOD_VAULT_CODE . '" is missing.')
            );
        }

        return $data[ConfigProvider::METHOD_VAULT_CODE];
    }
}
