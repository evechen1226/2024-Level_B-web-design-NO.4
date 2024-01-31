<?php include_once 'db.php';
if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['imgp_name'],"../img/{$_FILES['img']['name']}");

}
$_POST['no']=rand(100000,99999);
$_POST['sh']=1;
$Goods->save($_POST);
to('../back.php?do=th');
