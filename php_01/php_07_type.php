<?php
	$str="100 hello";
	$num=200;
	echo $str+$num;
	//返回变量的类型
	echo gettype($str)."\n";
	echo gettype($num)."\n";
	//is_type查看是否属于某个类型，是返回true,否返回false
	echo is_string($num);//php中false为空
	if(is_string($num)){
		echo "string";
	}else{
		echo "num";
	}
?>