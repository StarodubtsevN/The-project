<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php')
?>

    <title>Сохранение</title>
<body>
<div class=" container mt-4 ">
    <h1>Сохранение ключа API</h1>
      <form method="post" action="keep_api.php" >
          <label>
              <input type="text" class="form-control" name="api" placeholder="Введите свой API:">
              <br>
              <button class="btn btn-success" type="submit">Сохранить</button> <br>

              <a href="<?= url('account/index') ?>">Личный кабинет</a><br>
              <a href="<?= url('account/subscription/sub') ?>">Подписки</a><br>
              <a href="<?= url('account/API') ?>">Сохранение API</a><br>
              <a href="<?= url('auth/signup') ?>">Выход</a><br>
          </label>
      </form>
</div>
</body>
</html>

