<?php

require_once 'vendor/autoload.php';

$ch = curl_init(url: 'ya.ru');

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HEADER, true);


$html = curl_exec($ch);

curl_close($ch);

echo $html;
