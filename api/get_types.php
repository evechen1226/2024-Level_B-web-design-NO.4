<?php include_once "db.php";

//$types=$Type->all(['big_id'=>$_GET['big_id']]); 等同於$_GET，$_GET也是陣列格式

$types=$Type->all($_GET);

foreach($types as $type){
    echo "<option value='{$type['id']}'>{$type['name']}</option>";
}