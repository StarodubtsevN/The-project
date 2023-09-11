<?php require_once('../_partials/_header.php') ?>

    <title>Сохранение</title>
<body>
<div class=" container mt-4 ">
    <h1>Сохранение ключа API</h1>
      <form method="post" action="keep_api.php" >
          <label>
              <input type="text" class="form-control" name="api" placeholder="Введите свой API:">
              <br>
              <button class="btn btn-success" type="submit">Сохранить</button> <br>

              <a href="index.php">Личный кабинет</a><br>
              <a href="account/subscription/sub.php">Подписки</a><br>
              <a href="_log_sub.php">Выход</a><br>
          </label>
      </form>
</div>
</body>
</html>

