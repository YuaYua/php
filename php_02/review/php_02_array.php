<?php
	//range()创建一个包含指定范围单元的数组
	//range(min,max[,steg])
	//(可选)steg:步长
//	$numArr=range(1,100,3);
//	print_r($numArr);
//	$strArr=range("a","z");
//	print_r($strArr);

	//unset():删除数组元素
	//unset()会将被删除的数组元素下标和值都删除，且不会更新数组下标
	$arr1=array(1,2,4,5,6,3);
	$arr2=array("aaa"=>"uh","bbb"=>"igh","acc"=>"abc");
	print_r ($arr1);
	print_r ($arr2);
//	unset($arr1[0]);
//	print_r ($arr1);

	//count():取的数组长度
//	echo count($arr1);
	
	//in_array("元素",数组名):检测数组是否存在某个元素，存在输出1，否则没有输出
//	echo in_array(2,$arr1);

	//排序(按照ASCII)
	
	//sort():按数组元素大小进行排序(升序)
	//rsort():(降序)
	//但是如果数组是关联数组，关联数组的 key 值会变成0 1 2…
//	sort($arr1);
//	print_r($arr1);
//	sort($arr2);
//	print_r($arr2);

	//ksort():按索引排序(升序)，索引关系不变
	//krsort():(降序)
	ksort($arr2);
	print_r($arr2);
?>