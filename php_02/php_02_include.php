<?php
	include "test.php";
	echo "<hr>";
	//include 用几遍加载几次
	include "test1.php";
	//include_once:引入一次
	//once 只能检测到该行代码之前
	//是否加载过我们要加载的PHP
	//如果有就不会再次加载,没有才加载
	include_once "test.php";
	
	//如果使用include的时候找不到文件,就会报警包,但还是会继续执行下面代码
	//如果是require找不到文件
	//就不会继续向下执行
	require "test3.php";
	echo "<hr>";
	echo "world<hr>";
?>