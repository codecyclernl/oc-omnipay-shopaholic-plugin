<?php

use Lovata\OmnipayShopaholic\Classes\Helper\PaymentGateway;

Route::get(PaymentGateway::SUCCESS_RETURN_URL.'{slug}', function ($sSecretKey) {
    $obPaymentGateway = new PaymentGateway();
    return $obPaymentGateway->processSuccessRequest($sSecretKey);
})->middleware('web');

Route::get(PaymentGateway::CANCEL_RETURN_URL.'{slug}', function ($sSecretKey) {
    $obPaymentGateway = new PaymentGateway();
    return $obPaymentGateway->processCancelRequest($sSecretKey);
})->middleware('web');
