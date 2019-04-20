<?php
require "vendor/autoload.php";
$access_token = 'wgWq9CMNJ5AsWmPgQMVSRaw7hK4yIwkiLWVDr/S+RH+MhUzS5Ygcye71iWRKGYNJdj08hq+1Bn9ckXzfDACsphDPJmdLSiONSmHa/VUDzoaytsA54IppqRhK0DgJJlrmqKKBAf4AiXlwOUEjQ947HQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '921ca4f853c7c6f1a1332b34502e5011';
$idPush = 'Uc81f3b90d58790588a1dc7a39336e5ff';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
