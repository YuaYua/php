<?php
	$arr[]="aaa";
	$arr[]="bbb";
	var_dump($arr);
	$array["a"]="haha";
	$array["b"]="hafhfa";
	//不管前面设置多少键值对
	//但是当不设置key时还是会从0开始设置
	$array[]="joi";
	var_dump($array);
	
	//索引数组
	$indexArray=array(1,2,3,4,5);
	//关联数组
	$linkArray=array("a"=>1,"b"=>"oo");
	var_dump($indexArray);
	var_dump($linkArray);
	//修改的是原数组,下标也会被删除,不会更新下标
	unset($indexArray[0]);
	print_r($indexArray);
	echo in_array(2,$indexArray)+"\n";

	
	$numArr=range("a","z",3);
	var_dump($numArr);
	
?>