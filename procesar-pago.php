<?php
MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

$info = MercadoPago\Preference::find_by_id($MP_id_payment);
echo "<pre>"; print_r($info);