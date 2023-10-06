<?php

require('../_partials/_helpers.php');

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

    $query = "INSERT INTO project_settings (api_key, url_project) VALUES('$api', '$url')";

    $result = $dbc->query($query);
    if ($result) echo "Получилось !";
    mysqli_close($dbc);
}