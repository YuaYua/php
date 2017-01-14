<?php
	//自定义常量的方法，默认对大小写敏感
	//如果想要对大小写不敏感需设置第三个值为true
	define('PI',3.141592653,true);
	echo pi;
	echo "<hr>";
	echo PHP_OS;
	echo "<hr>";
	echo PHP_VERSION;
	echo "<hr>";
		
	//php信息
//	phpinfo();
	
	
	//魔术常量
	
	echo __FILE__;//输出文件名及其完整路径
	echo "<hr>";
	function ccc(){
		echo __FUNCTION__;//输出函数名
	}
	ccc();
	echo __LINE__;//输出当前行号
	echo "<hr>";
?>