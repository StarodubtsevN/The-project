<?php

$db = mysqli_connect("localhost", "root", "", "API");

if ($db->connect_errno) {
    echo "Извините возникла проблема с подключением к бд :(";
    exit;
}

if (isset($_POST['fam']) || isset($_POST['name']) || isset($_POST['em']) || isset($_POST['pass']) || isset($_POST['organization']) || isset($_POST['position'])){
// запись в строковые переменные
    $fam=$_POST['fam'];
    $name=$_POST['name'];
    $em=$_POST['em'];
    $pass=$_POST['pass'];
    $position=$_POST['position'];
    $organization=$_POST['organization'];
// проверка на заполнение еще нужно доделать, чтобы выводилось сообщение в то поле, которое не заполнено
    if (empty($_POST['fam']) || empty($_POST['name']) || empty($_POST['em']) || empty($_POST['pass']) || empty($_POST['organization']) || empty($_POST['position'])){
        echo ("Какое-то поле не заполнено");
        //header('Location: /pnt/code/auth/_sign-in_form.php');
        exit;
    }
// перевод данных в формат бд
    $_fam= $db->real_escape_string($fam); //_... - означает уже переведенные данные в формат бд
    $_name= $db->real_escape_string($name);
    $_em= $db->real_escape_string($em);
    $_pass= $db->real_escape_string($pass);
    $_organization= $db->real_escape_string($organization);
    $_position= $db->real_escape_string($position);
// sql запрос
    $que= "INSERT INTO registration (surname, name, email, pass, organization, position) VALUES ('$_fam','$_name','$_em','$_pass','$_organization','$_position')";
    $res = $db->query($que);

    if ($res) header('Location: ../account/acc_form.php');
}

