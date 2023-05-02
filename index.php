<?php
    $login = filter_var(trim($_POST['login']),
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
?>
