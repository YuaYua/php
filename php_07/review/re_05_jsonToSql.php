<?php
include_once("../sqp.php");
$arr=file("json.txt");
//var_dump($arr);


//DELETE FROM book WHERE bookId>24

foreach ($arr as $key => $value) {
	//从数组里取出json 对象
//	echo $value;
//	echo "<hr>";
	$arr1=json_decode($value,true);
//	var_dump($arr1);
	$str1="";
	$str2="";
	foreach ($arr1 as $key1 => $value1) {
		if($key1!="bookId"){
			$str1.=$key1.",";
			$str2.="'".$value1."',";
		}
	}
	$str1=substr($str1, 0,strlen($str1)-1);
	$str2=substr($str2, 0,strlen($str2)-1);
	$query="insert into book({$str1}) values ($str2)";
//	echo $query;
//	echo "<hr>";
	$result=mysql_query($query);
//	var_dump($result);
	if(mysql_affected_rows()){
		echo "插入成功";
	}else{
		echo "插入失败";
	}
}
?>