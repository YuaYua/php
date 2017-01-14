<?php
	//链接数据库服务器
	$db=mysql_connect("localhost","root","");
	//安全性操作
	if($db){
		//选择要操作的数据库
		mysql_select_db("php");
		//对数据库的操作
		$query="select * from user";
		//执行操作语句 并得到结果集
		$result=mysql_query($query);
		//显示结果集中的数据
		while ($row=mysql_fetch_assoc($result)) {
			var_dump($row);
		}
	}
?>