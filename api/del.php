<?php include_once "db.php";

$do=new DB($_POST['table']);
$db->del($_POST['id']);