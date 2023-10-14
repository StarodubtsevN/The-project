<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
require('test_table.php');
ensureLogIn();
global $dev_score;
global $test_score;
?>
<html lang="en">
<body>
<div class=" container mt-4 ">
    <h1>Главная страница</h1>

    <a>Главная страница</a><br>
    <a href="<?= url('account/acc_form') ?>">Личный кабинет</a><br>
    <a href="<?= url('account/subscription/sub_form') ?>">Подписки</a><br>
    <a href="<?= url('account/api_form') ?>">Настройки Redmine</a><br>
    <a href="<?= url('auth/_sign-in_form') ?>">Выход</a><br>

    <div>
        <p class="dev"> <span class="dev-score">Developer's score:<?php echo $dev_score?> </span> </p>
        <p class="test"> <span class="test-score">Tester's score:<?php echo $test_score?> </span> </p>
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
</html>

