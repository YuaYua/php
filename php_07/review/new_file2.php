<?php
include_once "../sqp.php";
$str=file_get_contents("new.txt");
$arr=json_decode($str,true);
//var_dump($arr);

foreach($arr as $key => $value){
	$keyArr=[];
//	var_dump($value);
	
	$str="insert into book(";
	$valuestr="";
	foreach ($value as $keys => $values) {
		if($keys!="bookId"){
			$str.=$keys.",";
			$valuestr.="'".$values."',";
		}
	}
	//除去最后一个","
//	$str=rtrim($str,",");
//	$valuestr=rtrim($valuestr,",");
//	或
	$str=substr($str, 0,-1);
	$valuestr=substr($valuestr, 0,-1);
//	var_dump($valuestr);
//	var_dump($str);
	$str.=") values (".$valuestr.")";
//	var_dump($str);
	$result=mysql_query($str);
////	var_dump($result);
//	if(mysql_affected_rows()){
//		echo "插入成功";
//	}else{
//		echo "插入失败";
//	}
}

?>