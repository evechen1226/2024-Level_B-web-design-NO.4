<h1>第一次購買</h1>
<img src="../img/0413.jpg" onclick="location.href='?do=reg'">
<h1>會員登入</h1>
<table>
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="text" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td class="tt">驗證碼</td>
    <td class="pp">
      <?php
      $a = rand(10, 99);
      $b = rand(10, 99);
      $_SESSION['ans'] = $a + $b;
      echo " {$a} + {$b} = ";
      ?>
      <input type="text" name="ans" id="ans" value="
      <?php
      echo $_SESSION['ans'];
      ?>">
    </td>
  </tr>
</table>

<div class="ct">
  <button onclick="login('mem')">確認</button>
  <button onclick="test()">test</button>

</div>
<script>
  function test() {
    let acc = $("#acc").val("11")
    let pw = $("#pw").val("11")
  }
</script>