<?php
	//链接数据库
	$db=mysql_connect("localhost","root","");
	//安全性操作
	if($db){
		//选择要使用的数据库
		mysql_select_db("php");
		//对数据库的操作
		$query="select * from user";
		
		//mysql_query($query):执行sql语句  得到的是结果集
		$result = mysql_query($query);
		
		//显示数据的方法
//		$row=mysql_fetch_object($result);
		//对象内容的获取使用"->"
//		echo $row->name;
		
		
		while($row=mysql_fetch_assoc($result)){
			var_dump($row);
		}
	}
?>