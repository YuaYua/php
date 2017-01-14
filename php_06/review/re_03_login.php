<?php
	//包含写有链接数据库的.php
	include_once "../sqp.php";
	//从 form 表单获取用户名和密码
	$name=$_POST["username"];
	$pass=$_POST["password"];
	//session要先打开才能使用但不能多次打开
	session_start();
//	var_dump($_SESSION);
	
	//
	$query="select * from user where name='$name' and password='$pass'";
	$result=mysql_query($query);
//	var_dump($result);
	//获取查询返回的记录数
	//要求返回的记录数为一而不是>0是为了防止多人登录同一账号
	if(mysql_num_rows($result)==1){
		//设置 cookie
		//并且过期时间设为七天
		setcookie("username",$name,time()+3600*24*7);
		setcookie("password",$pass,time()+3600*24*7);
		//获取数据库显示数据
		$rows=mysql_fetch_assoc($result);
		$_SESSION["userid"]=$rows["userId"];
		if($_SESSION['userid']==2){
			echo "I am in ";
		}
		echo "login success";		
	}else{
		echo "login failed";
	}
	
?>