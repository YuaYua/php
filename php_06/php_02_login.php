<?php
	
	include_once 'sqp.php';
	$name=$_POST["username"];
	$pass=$_POST["password"];
	//session必须开启才能看
	session_start();
	//也不能多次开启
//	session_start();//Notice: A session had already been started
//	var_dump($_SESSION);
	

	
	$query="select * from user where name='$name' and password='$pass'";
	$result=mysql_query($query);
	
	
	if(mysql_num_rows($result)==1){
		$row=mysql_fetch_assoc($result);
//		var_dump($row);
		$_SESSION["userid"]=$row["userId"];
//		var_dump($_SESSION);
		setcookie("username",$name,time()+3600*24*7);
		setcookie("password",$pass,time()+3600*24*7);
//		var_dump($_COOKIE);
		if($_SESSION["userid"]==2){
			echo "我进来了";
		}	
		echo "登录成功";
		
	}else{
		echo "登录失败";
	}
	echo "<a href='index.php'>个人主页</a>";
	
	
//	
?>