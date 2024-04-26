<h2>會員管理</h2>
<table class="all">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="tt ct">帳號</td>
        <td class="tt ct">密碼</td>
        <td class="tt ct">管理</td>
    </tr>
    <?php
    $rows=$Mem->all();
    foreach($rows as $row){
    ?>
    <tr>
        <td class="pp ct"><?=$row['name']?></td>
        <td class="pp ct"><?=$row['acc']?></td>
        <td class="pp ct"><?=$row['regdate']?></td>
        <td class="pp ct">
            <?php
                echo  "<button onclick='location.href=&#39;?do=edit_mem&id={$row['id']}&#39;'>修改</button>"; 
                echo  "<button onclick='del(&#39;mem&#39;,{$row['id']})'>刪除</button>";
            ?>
            </td>
    </tr>
    <?php    
    }
    ?>
</table>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>
