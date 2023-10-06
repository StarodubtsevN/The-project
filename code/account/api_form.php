<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php');
ensureLogIn();
?>

    <title>Настройки</title>
<body>
<div class=" container mt-4 ">
    <h1>Настройки подключения к Redmine</h1>
      <form method="post" action="keep_api.php" >
          <label>
              <input type="text" class="form-control" name="api" placeholder="введите свой API-key">
              <br>
              <input type="text" class="form-control" name="url_project" placeholder="ссылка вашего проекта">
              <br>
              <button class="btn btn-success" type="submit">Сохранить</button> <br>

              <a href="<?= url('account/acc_form') ?>">Личный кабинет</a><br>
              <a href="<?= url('account/subscription/sub_form') ?>">Подписки</a><br>
              <a href="<?= url('account/api_form') ?>">Настройки Redmine</a><br>
              <a href="<?= url('auth/_sign-in_form') ?>">Выход</a><br>
          </label>
      </form>
</div>
</body>
</html>

