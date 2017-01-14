<?php
include_once "../sqp.php";
$query="select * from book";
$result=mysql_query($query);
if(mysql_num_rows($result)){
	while ($row=mysql_fetch_assoc($result)) {
//		var_dump($row);
		$arr[]=$row;
	}
}
$str=json_encode($arr);
file_put_contents("new.txt", $str  );
?>