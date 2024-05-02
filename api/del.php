<?php include_once "db.php";

$do=new DB($_POST['table']);
$do->del($_POST['id']);