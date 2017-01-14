<?php
$xml=simplexml_load_file("book.xml");
//var_dump($xml);
$book=$xml->xpath("book");
//var_dump($book);
$n=0;
$i=0;
include_once "../sqp.php";
//$query="insert into book(bookName,bookIntro,...) value ('$val1','$val2',...)"
foreach ($book as $key => $value) {
//	
	$str1="";
	$str2="";
	foreach ($value as $keys => $val) {
		if($keys!="bookId"){
			$str1.=$keys.",";
			//values要用""括起来
			$str2.="'".$val."',";
		}
		
//		echo $keys.$val;
//		echo $i;
//		echo "<hr>";
	}
//	echo $str1;
	//最后会多出一个",",要截掉
	$str1=substr($str1, 0,strlen($str1)-1);
	$str2=substr($str2, 0,strlen($str2)-1);
	$query="insert into book({$str1}) values ($str2)";
	$result=mysql_query($query);
	if(mysql_affected_rows()){
		echo "插入成功";
	}else{
		echo "插入失败";
	}
}
?>