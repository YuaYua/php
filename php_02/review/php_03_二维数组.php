<?php
	//二维数组的创建
	//方法一
	$arr1=array(
	array(1,2,3),
	array(4,5,6)
	);
	print_r($arr1);
	//方法二
	$arr2=array(
	"a"=>array("name"=>"kk","pass"=>123),
	"b"=>array("name"=>"ll","pass"=>456)
	);
	print_r($arr2);
	
	//二维数组的遍历
	foreach ($arr2 as $key1 => $value1) {
		echo $key1;
		print_r($value1);
		foreach ($value1 as $key2 => $value2) {
			echo "$key2"."是"."$value2";
		}
	}
	
	
?>