<?php
	$arr["aaa"]="102";
	$arr["acb"]="123";
	$arr["abc"]="132";
	$arr["ddd"]="1024";
	var_dump($arr);
	//使用sort对关联数组进行排序,
	//key值会变成0123这种形式,
	//在很多情况下不适合
	sort($arr);
	var_dump($arr);
	echo "\n";
	rsort($arr);
	var_dump($arr);
	//按索引大小排序
	ksort($arr);
	var_dump($arr);
	
	$numArr=array("oo","fdo","fno","nodf","pfidj");
	var_dump($numArr); 
	sort($numArr);
	var_dump($numArr); 
	
?>