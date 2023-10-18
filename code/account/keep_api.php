<?php

global $userId;

require('../_partials/_helpers.php');
include('../auth/_log-in_processor.php');
ensureLogIn();

$dbc = mysqli_connect("localhost", "root", "", "API");
if (isset($_POST['api']) && isset($_POST['url_project'])) {
    $API = $_POST['api'];
    $url_project=$_POST['url_project'];
    if (empty($_POST['api'])) {
        echo("Поле не заполнено");
        exit;
    }elseif (empty($_POST['url_project'])) {
        echo("Поле не заполнено");
        exit;
    }

    if ($dbc->connect_errno) {
        echo "Извините возникла проблема :(";
        exit;
    }

    $api = $dbc->real_escape_string($API);
    $url=  $dbc->real_escape_string($url_project);
    $userId = $_SESSION['id'];
    $query = "INSERT INTO project_settings (user_id, api_key, url_project) VALUES('$userId','$api', '$url')";

    $result = $dbc->query($query);
    mysqli_close($dbc);
}