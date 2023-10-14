<pre>
<?php
const IN_PROGRESS = "in progress";
const TESTING = "testing";
const DONE = "done";
global $dev_score;
global $test_score;

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

    if (strtolower($row['status']) === TESTING && isset($rows[$i + 1]) && strtolower($rows[$i + 1]['status']) === DONE) {
        $developerScore[$row['task_id']] += 1;
    } elseif (strtolower($row['status']) === TESTING && isset($rows[$i + 1]) && strtolower($rows[$i + 1]['status']) === IN_PROGRESS) {
        $testerScore[$row['task_id']] += 0.25;
    }
}
$dev_score = array_sum($developerScore);
$test_score = array_sum($testerScore);

$dc->close();
?>
</pre>

