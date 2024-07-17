<?php

/**
 * ADOBE CONFIDENTIAL
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
 */

declare(strict_types=1);

namespace Magento\PaymentServicesPaypal\Api\Data;

/**
 * Interface PaymentOrderDetailsInterface
 * @api
 */
interface PaymentOrderDetailsInterface extends PaymentOrderInterface
{
    public const PAYMENT_SOURCE_DETAILS = 'payment_source_details';

    /**
     * Get payment source details
     *
     * @return Magento\PaymentServicesPaypal\Api\Data\PaymentSourceDetailsInterface
     */
    public function getPaymentSourceDetails();

    /**
     * Set payment source details
     *
     * @param Magento\PaymentServicesPaypal\Api\Data\PaymentSourceDetailsInterface $paymentSourceDetails
     * @return $this
     */
    public function setPaymentSourceDetails($paymentSourceDetails);
}
