<?php
require('../../_partials/_helpers.php');
require_once('../../_partials/_header.php');
ensureLogIn();
?>
<html>
<div class=" container mt-4 ">
    <body>
    <br>
    <h1>Подписки</h1><br><br>
    <a href="<?= url('account/acc_form') ?>">Личный кабинет</a><br>
    <a href="<?= url('account/subscription/sub_form') ?>">Подписки</a><br>
    <a href="<?= url('account/api_form') ?>">Настройки Redmine</a><br>
    <a href="<?= url('auth/_sign-in_form') ?>">Выход</a><br>
    </body>
    </div>
</html>
