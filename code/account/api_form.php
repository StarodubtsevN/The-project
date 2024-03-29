<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php');
ensureLogIn();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P&T страница входа</title>
    <link rel="stylesheet" href="../../css/Normalize copy.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
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
        <a href="<?= url('account/_score_form') ?>" class="account-text" type="button">Страница счета</a>
    </div>
    <div class="account">
        <a href="<?= url('account/api_form') ?>" class="account-text">Настройки Redmine</a>
    </div>
    <div class="account">
        <a href="<?= url('auth/_sign-in_form') ?>" class="account-text">Выход</a>
    </div>
</div>
<div class="registration">
    <svg class="photo-logo photo-logo-read" width="640" height="640" viewBox="0 0 640 640" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="640" height="640" fill="url(#pattern0)"/>
        <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_73_13" transform="translate(0 0.00138339) scale(0.0015625)"/>
            </pattern>
            <image id="image0_73_13" width="640" height="640" xlink:href="data:image/png;base64,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"/>
        </defs>
    </svg>
    <form method="post" action="keep_api.php" target="_self">
    <div class="container container-read">
        <p class="head-readmine">
            Настройка подключения
        </p>
        <ul class="list list-read">
            <li class="list-blank text-blank-read">
                <input class="text-block" name="api" placeholder="API-key">
            </li>
            <li class="list-blank text-blank-read">
                <input class="text-block" name="url_project" placeholder="Ссылка на проект">
            </li>
        </ul>
        <button href="#" class="bottom-reg bottom-reg-read">
            Сохранить
        </button>
    </div>
</form>
</div>
</body>
</html>
