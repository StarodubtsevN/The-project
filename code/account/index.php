<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
?>
<html>
<body>
<div class=" container mt-4 ">



    <title>Главная страница</title>
    <a>Главная страница</a><br>
    <a href="<?= url('account/index') ?>">Личный кабинет</a><br>
    <a href="<?= url('account/subscription/sub') ?>">Подписки</a><br>
    <a href="<?= url('account/API') ?>">Сохранение API</a><br>
    <a href="<?= url('auth/signup') ?>">Выход</a><br>
</div>
</body>
</html>
