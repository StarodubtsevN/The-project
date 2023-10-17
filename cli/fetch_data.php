<?php
$dbc= mysqli_connect("localhost", "root", "", "API");

if ($dbc->connect_error) {
    die("Ошибка соединения: " . $dbc->connect_error);
}

$projectSettigns = $dbc->prepare("SELECT * FROM project_settings");
$projectSettigns->execute();
$projectSettigns->bind_result($id, $userId, $api_key, $url, $updated_at, $last_sync_date);
$projectSettigns->store_result();

while ($projectSettigns->fetch()) {
    $redmineReadDate = date('Y-m-d H:i:s');

    $options = array(
        'updated_on' => '>=' . date('Y-m-d\TH:i:s', strtotime($last_sync_date)) . 'Z',
    );
//var_dump($options); die;
//$projectSettigns->close();
//    var_dump($id, $userId, $api_key, $url, $updated_at);

    $url_p = $url . '.json?' . http_build_query($options);
    $headers[] = 'X-Redmine-API-Key: ' . $api_key;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url_p);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//    var_dump($url_p); die;

    $response = curl_exec($ch);
    $data = json_decode($response, true);
//    var_dump($data);
//    die;
    foreach ($data['issues'] as $issue) {
        $status = $dbc->real_escape_string($issue['status']['name']);
        $issueId = $issue['id'];
        $query = "INSERT INTO tasks (status, task_id) VALUES('$status', '$issueId')";
        $result = $dbc->query($query);
    }

    $query = "UPDATE project_settings SET last_sync_date = '$redmineReadDate'";
    $result = $dbc->query($query);

    curl_close($ch);
}
$projectSettigns->close();