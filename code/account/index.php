<?php
$dbc = mysqli_connect("localhost", "root","", "API");

 $data = json_decode(file_get_contents('php://index'), true);


    if ($dbc ->connect_errno){
        echo "Извините возникла проблема :(";
      exit;
    }

    $query = "INSERT INTO US_API (us_api) VALUES('пРИВЕТ')";
    $result = $dbc->query($query);

    if($result) echo "Получилось !";

    mysqli_close($dbc);

