<?php
$access_token = '7O+3drtFbbUW/7h+tdloHowiOhd7TFcNehmr9b0XfNV6oggT58wzWPd6BmZbBc7ndj08hq+1Bn9ckXzfDACsphDPJmdLSiONSmHa/VUDzoZpuTylZjIhMCHTtbdGL6fsPYTHjvOzc+B7THNde22WOwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
