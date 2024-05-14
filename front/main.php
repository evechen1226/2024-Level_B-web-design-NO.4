<?php
$type = $_GET['type'] ?? 0;
if ($type != 0) {
  $t = $Type->find($type);
  if ($t['big_id'] == 0) {
    $goods = $Goods->all(['big' => $type, 'sh' => 1]);
    $nav = $t['name'];
  } else {
    $goods = $Goods->all(['mid' => $type, 'sh' => 1]);
    $nav = $Type->find($t['big_id'])['name'] . ">" . $t['name'];
  }
} else {
  $goods = $Goods->all(['sh' => 1]);
  $nav = '全部商品';
}

foreach ($goods as $g) {
?>
  <h2><?= $nav; ?></h2>
  <div class="all">
    <div class="pp cc">
      <img src="./img/<?= $g['img']; ?>" style="width: 150px;height:100px;" alt="">
    </div>
    <div>
      <div class="tt ct"><?= $g['name']; ?></div>
      <div class="pp">價格：<?= $g['price']; ?></div>
      <div class="pp">規格：<?= $g['spec']; ?></div>
      <div class="pp">簡介：<?= mb_substr($g['intro'], 0, 20); ?>...</div>
    </div>
  </div>
<?php
}
?>