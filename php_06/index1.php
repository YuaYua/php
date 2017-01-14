<?php
	session_start();
	if(isset($_SESSION["id"])){
		echo "欢迎登录";
	}else{
		header("Location:login.html?id=111");
	}
?>