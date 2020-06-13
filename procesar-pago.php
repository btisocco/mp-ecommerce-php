<?php
    $payment_method_id= $_POST["payment_method_id"];
    $payment_id= $_POST["payment_id"];

    $collection_id = $_POST["collection_id"];
    $collection_status = $_POST["collection_status"];
    $external_reference = $_POST["external_reference"];
    $payment_type = $_POST["payment_type"];
    $preference_id = $_POST["preference_id"];
    $site_id = $_POST["site_id"];
    $processing_mode = $_POST["processing_mode"];
    $merchant_account_id = $_POST["merchant_account_id"];

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Datos Recibidos</h1>
        <h3>collection_id</h3>
        <?php echo $collection_id?>
        <h3>collection_status</h3>
        <?php echo $collection_status?>
        <h3>external_reference</h3>
        <?php echo $external_reference?>
        <h3>payment_type</h3>
        <?php echo $payment_type?>
        <h3>preference_id</h3>
        <?php echo $preference_id?>
        <h3>site_id</h3>
        <?php echo $site_id?>
        <h3>processing_mode</h3>
        <?php echo $processing_mode?>
        <h3>merchant_account_id</h3>
        <?php echo $merchant_account_id?>
        
        <h3>payment_method_id</h3>
        <?php echo $payment_method_id?>
        <h3>payment_id</h3>
        <?php echo $payment_id?>

        
    </body>
    </html>