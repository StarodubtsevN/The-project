<?php

$db = mysqli_connect("localhost", "root", "", "API");

if ($db->connect_errno) {
    echo "Извините возникла проблема с подключением к бд :(";
    exit;
}

if (isset($_POST['fam']) || isset($_POST['name']) || isset($_POST['em']) || isset($_POST['pass'])){
// запись в строковые переменные
    $fam=$_POST['fam'];
    $name=$_POST['name'];
    $em=$_POST['em'];
    $pass=$_POST['pass'];
// проверка на заполнение еще нужно доделать, чтобы выводилось сообщение в то поле, которое не заполнено
    if (empty($_POST['fam']) || empty($_POST['name']) || empty($_POST['em']) || empty($_POST['pass'])){
        echo ("Какое-то поле не заполнено");
        //header('Location: /pnt/code/auth/_sign-in_form.php');
        exit;
    }
// перевод данных в формат бд
    $_fam= $db->real_escape_string($fam); //_... - означает уже переведенные данные в формат бд
    $_name= $db->real_escape_string($name);
    $_em= $db->real_escape_string($em);
    $_pass= $db->real_escape_string($pass);
// sql запрос
    $que= "INSERT INTO registration (surname, name, email, pass) VALUES ('$_fam','$_name','$_em','$_pass')";
    $res = $db->query($que);

    if ($res) header('Location: ../account/acc_form.php');
}

