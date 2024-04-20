<?php include_once "db.php";

if(is_array($_GET)){
  $acc =$_GET['user']['acc'];
}else{
  $acc=$_GET['acc'];
}

if($Mem->count(['acc'=>$acc])>0){
  echo 1 ;
}