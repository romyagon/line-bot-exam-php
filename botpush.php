<?php

require ('dbconnect.php');
require "vendor/autoload.php";

$access_token = 'KENfHPQO3+CR7rmmft7JBx8NG0K6BIjpA28JOtzq5Np+dehz4qAqAvjUq2uPcRuj6oUWhiMc7GNNNlnr54Kgq9XgHejMOp2NeI9emM1o7LMY48r1pUnMngV/8DEDTWg9bbw4lk5ri9rrvQ2dLPauNAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e715a7eb98f187d7589393aea6ee64af';

$pushID = 'U6425d696a3ef842370d37584b25f6f14';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder("จำนวนเงินที่โอน {$pushID}");
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $pushID;
//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

$sql   = "INSERT INTO userid (userID)
value ($pushID)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>





