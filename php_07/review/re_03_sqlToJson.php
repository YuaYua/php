<?php
include_once("../sqp.php");
$query="select * from book";
$result=mysql_query($query);
$arr=[];
if(mysql_num_rows($result)){
	while($row=mysql_fetch_assoc($result)){
//		var_dump($row);
		
		$json =JSON($row)."\n";
//		echo "<hr>";
		//把json对象存到数组里
		$arr[]=$json;
		file_put_contents("json.txt", $json,FILE_APPEND);
	}
}
function JSON($str){
	$json = json_encode($str);
	return preg_replace("#\\\u([0-9a-f]+)#ie","iconv('UCS-2','UTF-8', pack('H4', '\\1'))",$json);
}


//var_dump($arr);


?>