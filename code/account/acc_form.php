<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
require('test_table.php');
ensureLogIn();
global $dev_score;
global $test_score;
?>
<!--/*<html lang="en">
<body>
<div class=" container mt-4 ">
    <h1>Главная страница</h1>


    <div>
        <p class="dev"> <span class="dev-score">Developer's score:/*echo $dev_score*/ </span> </p>
        <p class="test"> <span class="test-score">Tester's score: /*echo $test_score*/ </span> </p>
          <br>
        <div class="colon">
            <div class="top">top</div>
                <div class="bottom">bottom</div>
            </div>

            <div class="task">
                <div class="in-progress">in-progress:</div>
                <div class="done">done:</div>
            </div>
    </div>
</div>
</body>
</html>-->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Normalize copy.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
    <title>Хом</title>
</head>
<body>
<div class="option-window">
    <div class="photo">
        <img src="../../image/Male_User-1024.webp" alt="Ваше фото" height="162px" width="162px">
    </div>
    <div class="account">
        <a href="<?= url('account/acc_form') ?>" class="account-text">Личный кабинет</a>
    </div>
    <div class="account" type="reset">
        <a href="<?= url('account/subscription/sub_form') ?>" class="account-text">Подписка</a>
    </div>
    <div class="account">
        <a href="<?= url('account/api_form') ?>" class="account-text">Настройки Redmine</a>
    </div>
    <div class="account">
        <a href="<?= url('auth/_sign-in_form') ?>" class="account-text">Выход</a>
    </div>
</div>
<div class="window-account">
    <img src="../../image/Male_User-1024.webp" alt="ваше фото" width="100px" height="100px" class="image-home">
    <p class="home-name">Валентин</p>
    <p class="home-surname">Сушков</p>
    <p class="home-organisation">Shellpea</p>
    <p class="home-status">Project manager</p>
</div>
</body>
</html>
