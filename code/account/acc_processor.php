<?php
session_start();
$DB = mysqli_connect("localhost", "root", "", "API");
global $name, $sure_name, $organization, $position;
$s_id = $_SESSION['id'];
$query = $DB->prepare('SELECT name, surname FROM registration WHERE id=\''.$s_id.'\';');
$query->execute();
$query->bind_result($name, $sure_name);
$query->fetch();
/*echo $name;
echo $sure_name;*/
$query->close();
