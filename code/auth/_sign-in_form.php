<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php') ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P&T страница регистрации</title>
    <link rel="stylesheet" href="../../css/Normalize copy.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="registration">
    <form method="post" action="_signup_processor.php">
    <div class="container">
        <p class="head">
            Регистрация
        </p>
        <ul class="list">
            <li class="list-blank">
                <input class="text-block" type="text" name="fam" placeholder="Фамилия">

            </li>
            <li class="list-blank">
                <input class="text-block" type="text" name="name" placeholder="Имя">

            </li>
            <li class="list-blank">
                <input class="text-block" type="email" name="em" placeholder="Email">

            </li>
            <li class="list-blank">
                <input class="text-block-last" type="password" name="pass" placeholder="Пароль">

            </li>
        </ul>
            <button href="#" class="bottom-reg">Зарегистрироваться</button>
        <div class="line"></div>
            <a href="_log-in_form.php" class="No">Уже есть аккаунт</a>
    </div>
    </form>
</div>
</body>
</html>