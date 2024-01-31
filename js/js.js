// JavaScript Document
function lof(x)
{
	location.href=x
}

// 刪除功能
function del(table,id){
	$.post("./api/del.php",{table,id},()=>{
		location.reload()
	})
}