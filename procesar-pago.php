<?php

echo 'Procesar Pago';

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either Production or SandBox AccessToken

$payment = \MercadoPago\Payment::get($payment_id);

echo $payment;