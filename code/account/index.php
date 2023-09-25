<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
?>
<html lang="en">
<body>
<div class=" container mt-4 ">
    <title>Главная страница</title>

    <a>Главная страница</a><br>
    <a href="<?= url('account/index') ?>">Личный кабинет</a><br>
    <a href="<?= url('account/subscription/sub') ?>">Подписки</a><br>
    <a href="<?= url('account/API') ?>">Сохранение API</a><br>
    <a href="<?= url('auth/signup') ?>">Выход</a><br>

    <div>
        <p class="pro"> Programmer </p>
        <p class="test"> Tester </p>
        <div class="main-window">
            <div class="left-score">
                <div class="score-l">1</div>
            </div>

            <div class="right-score">
                <div class="score-r">4</div>
            </div>
            <br>
        <div class="colon">
            <div class="top">top</div>
                <div class="bottom">bottom</div>
            </div>

            <div class="task">
                <div class="in-progress">in-progress</div>
                <div class="done">done</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

