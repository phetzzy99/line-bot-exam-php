<?php



require "vendor/autoload.php";

$access_token = '7O+3drtFbbUW/7h+tdloHowiOhd7TFcNehmr9b0XfNV6oggT58wzWPd6BmZbBc7ndj08hq+1Bn9ckXzfDACsphDPJmdLSiONSmHa/VUDzoZpuTylZjIhMCHTtbdGL6fsPYTHjvOzc+B7THNde22WOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '921ca4f853c7c6f1a1332b34502e5011';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







