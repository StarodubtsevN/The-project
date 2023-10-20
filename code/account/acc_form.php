<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
require('test_table.php');
require ('acc_processor.php');
// @todo убрать ошибку при вызове функции
/*ensureLogIn();*/
global $dev_score;
global $test_score;
global $name;
global $sure_name;
global $organization;
global $position;
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
        <a href="<?= url('account/api_form') ?>" class="account-text">Настройки Redmine</a>
    </div>
    <div class="account">
        <a href="<?= url('auth/_sign-in_form') ?>" class="account-text">Выход</a>
    </div>
</div>

<div class="window-account">
    <img src="../../image/Male_User-1024.webp" alt="ваше фото" width="100px" height="100px" class="image-home">
    <p class="home-name"><?php echo $name ?></p>
    <p class="home-surname"><?php echo $sure_name ?></p>
    <p class="home-organisation"><?php echo $organization ?></p>
    <p class="home-status"><?php echo $position ?></p>
</div>
</body>
</html>
