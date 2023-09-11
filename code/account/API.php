<?php require_once('../_partials/_header.php') ?>

    <title>Сохранение</title>
<body>
<div class=" container mt-4 ">
    <h1>Сохранение ключа API</h1>
      <form method="post" action="keep_api.php" >
          <label>
              <input type="text" class="form-control" name="api" placeholder="Введите свой API:">
              <br>
              <button class="btn btn-success" type="submit">Сохранить</button>
          </label>
      </form>
</div>
</body>
</html>

<?php

$dbc = mysqli_connect("localhost", "root", "", "API");

if (isset($_POST['api'])) {
    $API = $_POST['api'];

    if (empty($_POST['api'])) {
        echo("Поле не заполнено");
        exit;
    }

    if ($dbc->connect_errno) {
        echo "Извините возникла проблема :(";
        exit;
    }

    $api = '"' . $dbc->real_escape_string($API) . '"';

    $query = "INSERT INTO US_API (api_key) VALUES('$api')";

    $result = $dbc->query($query);

    if ($result) echo "Получилось !";
    mysqli_close($dbc);
}

?>
