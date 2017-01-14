<?php
	$arr=array("dd",2,3);
	//var_dump()会显示数组元素的类型
	var_dump($arr);
	echo "<hr>";
	print_r($arr);
	echo "<hr>";
	echo $arr[0];
	//添加一个新的元素 元素下标为hh
	$arr["hh"]="ccc";
	print_r($arr);
	echo $arr["hh"];
?>