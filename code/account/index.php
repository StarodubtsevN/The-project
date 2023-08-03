<?php

if (isset($_POST['FormSubmit'])){
    $api = filter_var(trim($_POST['API']),
        FILTER_SANITIZE_STRING);

    $_form=$_POST['id'];
    $form=$_POST['api'];

    $mysqli = new mysqli("localhost", "root","", "API");
    if ($mysqli ->connect_errno){
        echo "Извините возникла проблема :(";
        mysqli_connect_error();
    }

    $id = '"'.$mysqli->real_escape_string($_form).'"';
    $API = '"'.$mysqli->real_escape_string($api).'"';

    $query = "INSERT INTO US_API (user_id, us_api) VALUES($id, $api)";
    $result = $mysqli->query($query);

    if($result){
        print ('Получилось !'. '<br>');
    }
    $mysqli->close();
}
