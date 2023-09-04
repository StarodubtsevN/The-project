<?php
$dbc = mysqli_connect("localhost", "root", "", "API");

if (isset($_POST['api'])){
    $API=$_POST['api'];

    if (empty($_POST['api'])){
        echo ("Поле не заполнено");
        exit;
    }

    if ($dbc->connect_errno) {
        echo "Извините возникла проблема :(";
        exit;
    }

    $api= '"' .$dbc->real_escape_string($API). '"';

    $query = "INSERT INTO US_API (api_key) VALUES('$API')";

    $result = $dbc->query($query);

    if ($result) echo "Получилось !";
    mysqli_close($dbc);
}


