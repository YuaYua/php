<?php
//	print_r($_POST);
	$num=0;
	function nums(){
		//全局变量在方法中不能使用
		//第一种使用方法
		$ccc=$GLOBALS["num"];
		echo $ccc;
//		print_r($GLOBALS);
		//第二种取出方式
		global $num;
		echo $num;
		
	}
	nums()
?>