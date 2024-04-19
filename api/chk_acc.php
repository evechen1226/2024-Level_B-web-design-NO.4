<?php include_once "db.php";
$acc=$_GET['acc'];
if($Admin->count(['acc'=>$acc])>0){
  echo 1 ;
}