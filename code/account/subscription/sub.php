<?php
require('../../_partials/_helpers.php');
require_once('../../_partials/_header.php') ?>
<html>
<div class=" container mt-4 ">
    <body>
    <br>
    <a>Подписки</a><br><br>
    <a href="<?= url('account/index') ?>">Личный кабинет</a><br>
    <a href="<?= url('account/subscription/sub') ?>">Подписки</a><br>
    <a href="<?= url('account/API') ?>">Сохранение API</a><br>
    <a href="<?= url('auth/signup') ?>">Выход</a><br>
    </body>
    </div>
</html>
