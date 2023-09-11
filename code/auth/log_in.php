<?php
/*    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5)
    {
     echo "Недопустимая длина логина";
      exit();
    }

    else if(mb_strlen($password) < 3 || mb_strlen($password) > 12)
     {
         echo "Недопустимая длина пароля(от 2 до 12 символов)";
          exit();// если выполнится это условие, то код, который будет ниже не выполнится
     }


    /*$mysql = new mysqli("localhost","root","","registers");

    $mysql->query("INSERT INTO `users`(login, password), Values ($login, $password)");
    $mysql->close();*/
// подключились к бд

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
    $query = $DB->prepare('SELECT Count(*) as count FROM registration  
                         WHERE email = \''.$_log.'\' AND pass =  \''.$_pas.'\';');
    $query->execute();
    $query->bind_result($res);
    $query->fetch();
    if($res == 1) {
        echo ('Получилось');
        //header("Location: Your_URL");
    } else {
        echo "Ошибка";
    }
}

?>
