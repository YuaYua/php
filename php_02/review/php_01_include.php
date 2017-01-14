<?php
	
	//require和include
	
	//一、include
	include "php_01_01_included.php";
	echo "<hr>";
	include "php_01_1_included.php";
	echo "<hr>";
	//include_once:检测上面代码是否已经包含文件,若包含则不执行include_once
	include_once "php_01_1_included.php";
	echo "<hr>";
	
	//二、require
//	echo "require";
//	echo "<hr>";
//	require "php_01_1_included.php";
//	echo "<hr>";
//	require_once "php_01_1_included.php";
//	echo "<hr>";
//	require "php_01_1_included.php";
	echo "<hr>";
	echo "这是主文件";
	
	//当子文件出现错误require 会中断程序执行，include只会报一个警告，然后继续执行
?>