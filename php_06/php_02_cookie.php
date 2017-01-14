<?php
//	var_dump($_COOKIE);
//
//	setcookie("username","lck",time()+60);
//	echo "<hr>";
//	var_dump($_COOKIE);
//	echo $_COOKIE["username"];	
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
		<form action="php_02_login.php" method="post">
			<input type="text" name="username" id="username" value="<?php echo $name?>" />
			<input type="text" name="password" id="password" value="<?php echo $pass?>" />
			<input type="submit" value="提交"/>
		</form>
	</body>
</html>
