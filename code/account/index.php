<?php
//получение данных с формы

$arr = $_POST['US_API'];

// обработаем полученные данные

if (isset($_GET['formSubmit'])){
    $_form=$_GET['id'];
    $form=$_GET['api'];
    $mysqli = new mysqli("localhost", "root","", "API");
    if ($mysqli ->connect_errno){
        echo "Извините возникла проблема :(";
        exit;
    }
    $id = '"'.$mysqli->real_escape_string($_form).'"';
    $API = '"'.$mysqli->real_escape_string($form).'"';
    $query = "INSERT INTO US_API (id,API) VALUES($id,$API)";
    $result = $mysqli->query($query);

    if($result) {
        echo "Получилось !" . "<br>";
    }
    $mysqli->close();
}

