<pre>
<?php
const IN_PROGRESS = "in progress";
const TESTING = "testing";
const DONE = "done";


$dc = mysqli_connect("localhost", "root", "", "API");
if ($dc->connect_error) {
    die("Ошибка соединения: " . $dc->connect_error);
}

$result = $dc->query("SELECT * FROM tasks ORDER BY task_id, created_at");
$data = array();
$developerScore = [];
$testerScore = [];

$rows = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rows as $i => $row) {
    if (!isset($developerScore[$row['task_id']])) {
        $developerScore[$row['task_id']] = 0;
    }

    if (!isset($testerScore[$row['task_id']])) {
        $testerScore[$row['task_id']] = 0;
    }

    if ($row['status'] === TESTING && isset($rows[$i + 1]) && $rows[$i + 1]['status'] === DONE) {
        $developerScore[$row['task_id']] += 1;
    } elseif ($row['status'] === TESTING && isset($rows[$i + 1]) && $rows[$i + 1]['status'] === IN_PROGRESS) {
        $testerScore[$row['task_id']] += 0.25;
    }
}

echo "Счет разработчиков:" . array_sum($developerScore) . "\n";
echo "Счет тестировщиков:" . array_sum($testerScore);

// Закрытие соединения с базой данных
$dc->close();
?>
</pre>

