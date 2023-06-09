<?php

$url = 'https://api.exchangerate-api.com/v4/latest/USD';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    die('Error: ' . curl_error($ch));
}

$data = json_decode($response, true);
$exchangeRate = $data['rates']['TRY'];

echo '1 USD = ' . $exchangeRate . ' TRY';

curl_close($ch);
?>
