<?php
/*************************************************************************
 * ADOBE CONFIDENTIAL
 * ___________________
 *
 * Copyright 2023 Adobe
 * All Rights Reserved.
 *
 * NOTICE: All information contained herein is, and remains
 * the property of Adobe and its suppliers, if any. The intellectual
 * and technical concepts contained herein are proprietary to Adobe
 * and its suppliers and are protected by all applicable intellectual
 * property laws, including trade secret and copyright laws.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Adobe.
 **************************************************************************/
declare(strict_types=1);

namespace Magento\PaymentServicesPaypal\Model\Api\Data;

use Magento\PaymentServicesPaypal\Api\Data\PaymentConfigHostedFieldsInterface;

class PaymentConfigHostedFields extends PaymentConfigItem implements PaymentConfigHostedFieldsInterface
{
    /**
     * @inheritdoc
     */
    public function getPaymentSource()
    {
        return $this->getData(self::PAYMENT_SOURCE);
    }
    /**
     * @inheritdoc
     */
    public function setPaymentSource($paymentSource)
    {
        return $this->setData(self::PAYMENT_SOURCE, $paymentSource);
    }
    /**
     * @inheritdoc
     */
    public function getThreeDS()
    {
        return $this->getData(self::THREE_DS);
    }
    /**
     * @inheritdoc
     */
    public function setThreeDS($threeDS)
    {
        return $this->setData(self::THREE_DS, $threeDS);
    }
    /**
     * @inheritdoc
     */
    public function hasIsVaultEnabled()
    {
        return $this->getData(self::VAULT_ENABLED);
    }
    /**
     * @inheritdoc
     */
    public function setHasIsVaultEnabled($hasIsVaultEnabled)
    {
        return $this->setData(self::VAULT_ENABLED, $hasIsVaultEnabled);
    }
    /**
     * @inheritdoc
     */
    public function getCcVaultCode()
    {
        return $this->getData(self::CC_VAULT_CODE);
    }
    /**
     * @inheritdoc
     */
    public function setCcVaultCode($ccVaultCode)
    {
        return $this->setData(self::CC_VAULT_CODE, $ccVaultCode);
    }
    /**
     * @inheritdoc
     */
    public function isRequiresCardDetails()
    {
        return $this->getData(self::REQUIRES_CARD_DETAILS);
    }
    /**
     * @inheritdoc
     */
    public function setRequiresCardDetails($requiresCardDetails)
    {
        return $this->setData(self::REQUIRES_CARD_DETAILS, $requiresCardDetails);
    }
}
