<?php
	function sum($name,$age){
		echo "hello,{$name}hell";
		return $age;
	}
	$hh=sum("morning",18);
	echo $hh;
	echo "<hr>";
		
	//引用传递（址传递）
	$nums=3;
	function num(&$nums){
		$nums++;
	}
	num($nums);
	echo $nums;//值传递 ：3  //址传递：4
	echo "<hr>";
		
	//默认参数值,可选参数
	function aaa($name,$pass=1){
		echo $pass;
	}
	aaa("lck");
?>