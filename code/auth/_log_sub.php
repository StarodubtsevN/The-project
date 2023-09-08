<?php require_once('../_partials/_header.php') ?>
<body>
    <div class=" container mt-4 ">
        <h1>Вход</h1>

        <form action="_log_sub_old.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
          <br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
          <br>
          <button class="btn btn-success" type="submit">Войти</button>
        </form>
    </div>
</body>
</html>