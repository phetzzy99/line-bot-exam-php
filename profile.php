<?php


$access_token = '7O+3drtFbbUW/7h+tdloHowiOhd7TFcNehmr9b0XfNV6oggT58wzWPd6BmZbBc7ndj08hq+1Bn9ckXzfDACsphDPJmdLSiONSmHa/VUDzoZpuTylZjIhMCHTtbdGL6fsPYTHjvOzc+B7THNde22WOwdB04t89/1O/w1cDnyilFU=';

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

