// JavaScript Document
function lof(x) {
	location.href = x
}

// 刪除功能
function del(table, id) {
	$.post("./api/del.php", { table, id }, () => {
		location.reload()
	})
}

// 登入驗證功能

function login() {
	$.get("./api/chk_ans.php", { ans: $("#ans").val() }, (chk) => {
		if (parseInt(chk) == 0) {
			alert("驗證碼錯誤，請重新輸入")
		} else {
			$.pos("./api/chk_pw.php", { table, acc: $("#acc").val(), pw: $("#pw").val() }, (res) => {
				if (parent(res) == 0) {
					alert("帳號或密碼錯誤，請重新輸入")
				} else {
					location.href = 'index.php';
				}
			})
		}
	})
}