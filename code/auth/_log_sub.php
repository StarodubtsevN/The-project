<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php') ?>
<body>
    <div class=" container mt-4 ">
        <h1>Вход</h1>

        <form action="log_in.php" method="post">
            <input type="text" class="form-control" name="login" type="email" placeholder="Введите email">
          <br>
          <input type="password" class="form-control" name="pass" type="pass" placeholder="Введите пароль">
          <br>
          <button class="btn btn-success" type="submit">Войти</button>
        </form>
    </div>
</body>
</html>