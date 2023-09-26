<pre>
<?php

$dc = mysqli_connect("localhost", "root", "", "API");
if ($dc->connect_errno) {
    echo "Извините возникла проблема :(";
    exit;
}

/*$task_id= ;
$status=;
$project_id=;
$created_at=;

$query = "INSERT INTO tasks (task_id, status, project_id, created_at) VALUES('$task_id, $status, $project_id, $created_at')";
$result = $dc->query($query);

if ($result) echo "Получилось !";
mysqli_close($dc);*/

$result = $dc->query("SELECT * FROM tasks");

$arr = array();

while ($row = $result->fetch_assoc()) {
    var_dump($row);
    var_dump($row['status']);
//    foreach ($row as $key=>$value)
//        $arr[$row['id']][] = array($key =>  $value);
}
//for ($i = 0; $i < count($arr); $i++)
//{
//    echo $arr[$i]." ";
//}

?>
</pre>