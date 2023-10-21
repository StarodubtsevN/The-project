<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
require('test_table.php');
global $dev_score;
global $test_score;
ensureLogIn();
?>
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
        <a href="<?= url('account/_score_form') ?>" class="account-text" type="button">Страница счета</a>
    </div>
    <div class="account">
        <a href="<?= url('account/api_form') ?>" class="account-text">Настройки Redmine</a>
    </div>
    <div class="account">
        <a href="<?= url('auth/_sign-in_form') ?>" class="account-text">Выход</a>
    </div>
</div>

<?php echo 'Счет разработчиков:'. $dev_score?>
<?php echo 'Счет тестеров:' . $test_score?>
