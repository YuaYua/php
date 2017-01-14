<?php
	session_start();
	if(isset($_SESSION["userid"])){
		echo "欢迎访问";
	}
?>