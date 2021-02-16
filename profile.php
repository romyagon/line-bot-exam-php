<?php


$access_token = 'KENfHPQO3+CR7rmmft7JBx8NG0K6BIjpA28JOtzq5Np+dehz4qAqAvjUq2uPcRuj6oUWhiMc7GNNNlnr54Kgq9XgHejMOp2NeI9emM1o7LMY48r1pUnMngV/8DEDTWg9bbw4lk5ri9rrvQ2dLPauNAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

