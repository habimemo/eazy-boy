<?php
$access_token = 'xR2F7TD2ODHLJyAeJMFx0Od6i/zDtXSUWA68epzIJ8tFcoUQC093ZW0KuALJrwzLykeCdmlyWXeJz3dgSE48NVzVUVYBmss2fLORsE++nRLkQ1PZfOI6mruhrndqUheuFCT9bqHG71YYvVvr4x/OawdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
