<h2 class="ct">
    編輯管理帳號
</h2>
<?php
$row=$Admin->find($_GET['id']);
$pr=unserialize($row['pr']);
?>

<form action="./api/save_admin.php" method="post">
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" value="<?=$row['acc']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw"value="<?=$row['pw']?>"></td>
    </tr>
    <tr>
        <td class="tt ct">權限</td>
        <td class="pp">
            <div>
                <input type="checkbox" name="pr[]" vlaue="1">
                商類分類管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="2">
                訂單管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="3">
                會員管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="4">
                頁尾版權區管理
            </div>
            <div>
                <input type="checkbox" name="pr[]" value="5">
                最新消息管理
            </div>

        </td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$row=['id'];?>">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
</div>
</form>