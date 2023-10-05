<?php

session_start();

$DB = mysqli_connect("localhost", "root", "", "API");

if ($DB->connect_errno) {
    echo "Извините возникла проблема с подключением к бд :(";
    exit;
}
if (isset($_POST['login']) || isset($_POST['pass'])) {
    $log=$_POST['login'];
    $pas=$_POST['pass'];
    $_log= '"' .$DB->real_escape_string($log). '"'; //_... - означает уже переведенные данные в формат бд
    $_pas= '"' .$DB->real_escape_string($pas). '"';
    if (empty($_POST['login']) || empty($_POST['pass'])){
        echo ("Какое-то поле не заполнено");

        exit;
    }
    $query = $DB->prepare('SELECT id FROM registration  
                         WHERE email = \''.$_log.'\' AND pass =  \''.$_pas.'\';');
    $query->execute();
    $query->bind_result($userId);
    $query->fetch();
    if($userId) {
        $_SESSION['id'] = $userId;
        header('Location: ../account/index.php');
    } else {
        echo "Ошибка";
    }
}

?>
