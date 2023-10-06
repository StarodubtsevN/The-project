<?php
require('../_partials/_helpers.php');
require_once('../_partials/_header.php') ?>

    <body>
<div class="container mt-4 ">
    <h1>Рергистрация</h1>

    <form method="post" action="_signup_processor.php"> <!--//сделать исполнительный файл .php-->
        <label> Фамилия: <br>
            <input type="text" name="fam">
        </label>
        <br>
        <label> Имя: <br>
            <input type="text" name="name">
        </label>
        <br>
        <label> Email: <br>
            <input type="email" name="em">
        </label>
        <br>
        <label> Пароль: <br>
            <input type="password" name="pass">
        </label>
        <br>
        <button class="btn btn-success">Зарегистрироваться</button>
        <br>
        <a href="_log-in_form.php">Уже есть аккаунт</a>

    </form>
</div>
</body>
</html>

