<h2 class="ct">會員註冊</h2>

<table class="all">
  <tr>
    <td class="tt">姓名</td>
    <td class="pp"><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc" id="acc"><button onclick="chkacc()">檢測帳號</button></td>
  </tr>
  <tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td class="tt">電話</td>
    <td class="pp"><input type="text" name="tel" id="tel"></td>
  </tr>
  <tr>
    <td class="tt">住址</td>
    <td class="pp"><input type="text" name="addr" id="addr"></td>
  </tr>
  <tr>
    <td class="tt">電子信箱</td>
    <td class="pp"><input type="text" name="email" id="email"></td>
  </tr>
</table>

<div class="ct">
  <button onclick="reg()">註冊</button>
  <button onclick="clearn()">重置</button>
  <button onclick="test()">test</button>
</div>

<script>
  function test() {
    let name = $("#name").val("abc11")
    let acc = $("#acc").val("11")
    let pw = $("#pw").val("11")
    let tel = $("#tel").val("11")
    let addr = $("#addr").val("11")
    let email = $("#email").val("11")
  }
  regres = 0;

  function chkacc() {
    let acc = $("#acc").val()

    $.get("./api/chk_acc.php", {
      acc
    }, (res) => {
      // console.log("chkcc" + res)
      if (parseInt(res) == 1 || acc == "admin") {
        alert(`此帳號${acc}已被使用過`)

      } else {
        alert(`此帳號${acc}可以使用`)
      }
    })
  }

  function reg() {
    // let name = $("#name").val()
    // let acc = $("#acc").val()
    // let pw = $("#pw").val()
    // let tel = $("#tel").val()
    // let addr = $("#addr").val()
    // let email = $("#email").val()

    let user = {
      name: $("#name").val(),
      acc: $("#acc").val(),
      pw: $("#pw").val(),
      tel: $("#tel").val(),
      addr: $("#addr").val(),
      email: $("#email").val(),
    }

    $.get("./api/chk_acc.php", {
      user
    }, (res) => {
      if (parseInt(res) == 1 || acc == "admin") {
        alert(`此帳號${user.acc}已被使用過`)
      } else {
        // console.log("2")
        $.post("./api/reg.php", {
          user
        }, (res) => {
          alert(`歡迎${user.acc}，已註冊成功`)
        })
      }
    })

  }
</script>