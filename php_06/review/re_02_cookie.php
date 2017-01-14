<?php
	//没有用 setcookie 方法时$_COOKIE是
	//array(1) { ["_ga"]=> string(27) "GA1.1.1362976713.1480297242" }
//	var_dump($_COOKIE);
	//生成一个 cookie
//	setcookie("username","lck");
	//生成后是array(2) { ["username"]=> string(3) "lck" ["_ga"]=> string(27) "GA1.1.1362976713.1480297242" }
//	var_dump($_COOKIE);

	//time():设置过期时间
//	setcookie("username","lck",time()+60);
	$name="";
	if(isset($_COOKIE["username"])){
		$name=$_COOKIE["username"];
	}
	$pass="";
	if(isset($_COOKIE["password"])){
		$pass=$_COOKIE["password"];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="re_03_login.php" method="post">
			<input type="text" name="username" id="username" value="<?php echo $name;?>" />
			<input type="text" name="password" id="password" value="<?php echo $pass;?>" />
			<input type="hidden" name="userid" id="" value="1" />
			<input type="submit" value="提交"/>
		</form>
	</body>
</html>