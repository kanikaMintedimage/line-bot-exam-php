<?php



require "vendor/autoload.php";

$access_token = 'EjdWxsII5M3DyrD4b3GJdzV4dA56LPZeeEiVHSE6ACqbZ6fcb67N8z7Gwm53Rj4e7i7z0n+J1tkD+hHG9S4fg7cahHq9U8e0ADKW+uac/ru9vwr0R/fsAwBfZB7P5uOC0s2lk4y3ApKnWzXUQGUDIQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c1e80ef93d097e051dfbe0c2a8b594d8';

$pushID = 'U8ee83ee6ffa0bb8a31d593b75608c6a7';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







