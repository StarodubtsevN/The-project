<?php

if (isset($_GET['API'])){
    $_form=$_GET['id'];
    $form=$_GET['api'];
    $mysqli = new mysqli("localhost", "root","", "API");
    if ($mysqli ->connect_errno){
        echo "Извините возникла проблема :(";
        mysqli_connect_error();
    }

    $id = '"'.$mysqli->real_escape_string($_form).'"';
    $API = '"'.$mysqli->real_escape_string($form).'"';
    $query = "INSERT INTO US_API (id,API) VALUES($id,$API)";
    $result = $mysqli->query($query);

    if($result){
        print ('Получилось !'. '<br>');
    }
    $mysqli->close();
}
