<h1>管理員登入</h1>
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
  <button onclick="login('admin')">確認</button>
</div>
<button onclick="test()"> test </button>
<script>
  function test() {
    let acc = $("#acc").val("admin")
    let pw = $("#pw").val("1234")
  }

  function login(table) {
    $.get("./api/chk_ans.php", {
      ans: $("#ans").val()
    }, (chk) => {
      if (parseInt(chk) == 0) {
        alert("驗證碼錯誤，請重新輸入")
      } else {
        $.post("./api/chk_pw.php", {
          table,
          acc: $("#acc").val(),
          pw: $("#pw").val()
        }, (res) => {
          if (parseInt(res) == 0) {
            alert("帳號或密碼錯誤，請重新輸入")
          } else {
            location.href = 'back.php';
          }
        })
      }
    })
  }
</script>