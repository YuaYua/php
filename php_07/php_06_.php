<?php
	//自动加载
	//引入类
	function __autoload($class_name){
		echo "i have been used";
		var_dump($class_name);
		include_once("$class_name"."_class.php");
	}

	$person1=new Person("wukong",588);
	$person1->info();
	$children=new Children("bajie",399,9999);
	$children->info();
?>