<?php

$url = "https://redmine.shellpea.com/projects/p-n-t/issues.json";

$options = array(
    'project_id' => 'p-n-t',
    'issue_id' => 2084
);

$headers = [
    'X-Redmine-API-Key: b2ccdfa95816fc40268d96246195f6845b7581da',
    'Content-Type: application/json',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

$data = json_decode($response, true);
//var_dump($data);

foreach ($data['issues'] as $issue) {
    echo $issue['status']['name'];
    echo PHP_EOL;
}

curl_close($ch);



//curl -H "Content-Type: application/json" -H "X-Redmine-API-Key: b2ccdfa95816fc40268d96246195f6845b7581da" -X GET https://redmine.shellpea.com/projects/p-n-t/issues


