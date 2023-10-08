<pre>
<?php
session_start();
$dbc= mysqli_connect("localhost", "root", "", "API");

if ($dbc->connect_error) {
    die("Ошибка соединения: " . $dbc->connect_error);
}

$options = array(
    'updated_on' => '>=2023-10-04T16:35:00Z',
);

$session_id = $_SESSION['id'];

$projectSettigns = $dbc->prepare("SELECT * FROM project_settings WHERE user_id = $session_id");
$projectSettigns->execute();
$projectSettigns->bind_result($id, $userId, $api_key, $url, $updated_at);
$projectSettigns->fetch();
$projectSettigns->close();
var_dump($userId, $api_key, $url, $updated_at);

/*$options = [
    'updated_on' => '>=' . $updated_at,
 ];*/

$url_p = $url . '.json?' . http_build_query($options);
 $headers[] =  'X-Redmine-API-Key: ' . $api_key;

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url_p);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$data = json_decode($response, true);
var_dump($data);
foreach ($data['issues'] as $issue) {
    $status = $dbc->real_escape_string($issue['status']['name']);
    $issueId = $issue['id'];

    $query = "INSERT INTO tasks (status, task_id) VALUES('$status', '$issueId')";
    $result = $dbc->query($query);

}
curl_close($ch);
?>
</pre>

<!-- Comments(old scripts)
//$url = "https://redmine.shellpea.com/projects/p-n-t/issues.json?" . http_build_query($options);

/*$headers = [
'X-Redmine-API-Key: b2ccdfa95816fc40268d96246195f6845b7581da',
'Content-Type: application/json',
];*/-->
