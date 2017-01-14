<?php
	$path="/home/www/data/users.txt";
	//basename ( string path [, string suffix] ) 
	//返回路径中的文件名部份，当指定了可选参数suffix(后缀名)会将这部分内容去掉;
//	$url=basename($path);
	$url=basename($path,".txt");
	echo $url;
	echo "<hr>";
	//dirname()返回路径中的目录部份;
	$dir=dirname($path);
	echo $dir;
	echo "<hr>";
		
	//pathinfo()返回一个关联数组，其中包括路径中的四个部份：目录名 dirname，文件名 filename， extension扩展名，basename文件名+扩展名(如果有扩展名的话)
	$arr=pathinfo($path);
	var_dump($arr);
?>