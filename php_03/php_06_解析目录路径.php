<?php
	$path = "/home/www/data/users.txt";
//	$url=basename($path);
	$url=basename($path,".txt");
	$dir=dirname($path);
	echo $url;
	echo "<hr>";
	echo $dir;
	echo "<hr>";
	$arr=pathinfo($path);
	var_dump($arr);
?>