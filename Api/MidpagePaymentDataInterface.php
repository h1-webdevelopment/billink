<?php

namespace Billink\Billink\Api;

use Magento\Quote\Api\Data\AddressInterface;
use Magento\Quote\Api\Data\PaymentInterface;

interface MidpagePaymentDataInterface
{
    public function savePaymentInformationAndPlaceOrder(
        int $cartId,
        PaymentInterface $paymentMethod,
        ?AddressInterface $billingAddress = null
    ): MidpageResultDataInterface;

    public function saveGuestPaymentInformationAndPlaceOrder(
        string $cartId,
        string $email,
        PaymentInterface $paymentMethod,
        ?AddressInterface $billingAddress = null
    ): MidpageResultDataInterface;
}
