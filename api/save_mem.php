<?php include_once 'db.php';

$Mem->save($_POST);
to('../back.php?do=mem');

//可跟 reg.php 合併