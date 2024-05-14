<?php include_once "./api/db.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>┌精品電子商務網站」</title>
        <link href="./css/css.css" rel="stylesheet" type="text/css">
        <script src="./js/js.js"></script>
        <script src="./js/jquery-1.9.1.min.js"></script>
</head>

<body>
        <iframe name="back" style="display:none;"></iframe>
        <div id="main">
                <div id="top">
                        <a href="?">
                                <img src="./icon/0416.jpg">
                        </a>
                        <div style="padding:10px;">
                                <a href="index.php">回首頁</a> |
                                <a href="?do=news">最新消息</a> |
                                <a href="?do=look">購物流程</a> |
                                <a href="?do=buycart">購物車</a> |
                                <?php
                                if (isset($_SESSION['mem'])) {
                                ?>
                                        <a href="./api/logout.php?do=mem">會員登出</a> |
                                <?php
                                } else { ?>
                                        <a href="?do=login">會員登入</a> |
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_SESSION['admin'])) {
                                ?>
                                        <a href="back.php">返回管理</a> |
                                <?php
                                } else { ?>
                                        <a href="?do=admin">管理登入</a> |
                                <?php
                                }
                                ?>
                        </div>
                        <marquee behavior="" direction="">年終特賣會開跑了 &nbsp; &nbsp; 情人節特惠活動</marquee>
                </div>
                <div id="left" class="ct">
                        <div style="min-height:400px;">
                                <div class="ww">
                                        <a href="?type=0">全部商品(<?= $Goods->count(['sh' => 1]) ?>)</a>
                                </div>

                                <?php
                                //取得大分類
                                $bigs = $Type->all(['big_id' => 0]);
                                //使用迴圈列出所有大分類
                                foreach ($bigs as $big) {
                                        echo "<div class='ww'>";
                                        echo "<a href='?type={$big['id']}'>";
                                        echo $big['name'];
                                        echo "({$Goods->count(['big' =>$big['id'], 'sh' => 1])})";
                                        echo "</a>";
                                        //判斷此一大分類下是否有中分類
                                        if ($Type->count(['big_id' => $big['id']]) > 0) {
                                                $mids = $Type->all(['big_id' => $big['id']]);
                                                foreach ($mids as $mid) {
                                                        echo "<div class='s'>";
                                                        echo "<a href='?type={$mid['id']}'>";
                                                        echo $mid['name'];
                                                        echo "({$Goods->count(['mid' =>$mid['id'], 'sh' => 1])})";

                                                        echo "</a>";
                                                        echo "</div>";
                                                };
                                        };
                                        echo "</div>";
                                }
                                ?>
                        </div>
                        <span>
                                <div>進站總人數</div>
                                <div style="color:#f00; font-size:28px;">
                                        00005 </div>
                        </span>
                </div>
                <div id="right">
                        <?php
                        if (isset($_GET['do'])) {
                                include "./front/{$_GET['do']}.php";
                        } else {
                                include "./front/main.php";
                        }
                        ?>

                        <a href="./api/session.php" target="_blank"><button>session</button></a>

                </div>
                <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
                        頁尾版權 : <?php echo $Bottom->find(1)['bottom']; ?></div>
        </div>

</body>

</html>