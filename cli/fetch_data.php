<?php
$dbc= mysqli_connect("localhost", "root", "", "API");

if ($dbc->connect_error) {
    die("Ошибка соединения: " . $dbc->connect_error);
}


$options = array(
    'updated_on' => '>=2023-10-05T16:35:00Z',
);

// @todo поработать над этим
// $projectSettigns = SELECT * FROM project_settings WHERE user_id = $_SESSION['id']]
// $options = array(
//    'updated_on' => '>=' . $projectSettigns['last_update_date'],
//);
// $url = ['project_url'] . '/issues.json?' . http_build_query($options);
// $headers[] = 'X-Redmine-API-Key:' . $projectSettings['api_key'];

$url = "https://redmine.shellpea.com/projects/p-n-t/issues.json?" . http_build_query($options);

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
    $status = $dbc->real_escape_string($issue['status']['name']);
    $issueId = $issue['id'];

    $query = "INSERT INTO tasks (status, task_id) VALUES('$status', $issueId)";

    $result = $dbc->query($query);
}

curl_close($ch);

//curl -H "Content-Type: application/json" -H "X-Redmine-API-Key: b2ccdfa95816fc40268d96246195f6845b7581da" -X GET https://redmine.shellpea.com/projects/p-n-t/issues


