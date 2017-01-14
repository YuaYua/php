<?php
	//$_GET代表我们get请求过来的参数
	//他是一个超全局变量，并且是一个关联数组
	print_r($_GET);
	$user="lck";
	$pass="123";
	//想要取出关联数组中的key对应的值如下
	$name=$_GET["username"];
	//并且，若取出的key不存在会报错
	echo "<hr>";
	
	
	//如果要对我们的关联数组进行循环
	//使用foreach方法
	//第一个值是要循环谁
	//第二个值是当前循环的key
	//第三个值是当前key所对应的值
	foreach ($_GET as $key => $value) {
//		$key="username";
		//使用变量的变量实现接收变量的简化
		$$key=$value;
		
		echo $key."是".$$key."<hr>";
	}
	echo "<hr>";
	
	
	$password=$_GET["password"];
	
	if($user==$name && $pass==$password){
		echo "登录成功";
	}else{
		echo "登录失败";
	}
	
	
	
	
//	echo "<hr>";
//	echo $name;
//	echo "<hr>";
//	echo $password;
	
?>