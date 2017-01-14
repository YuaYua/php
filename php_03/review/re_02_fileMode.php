<?php
	//对文件操作要修改文件的读写权限，直接打开文件所在文件夹，在文件的简介里修改权限
	//"w":修改全部内容
	//"a":添加到文件结尾
//	$fh=fopen("file_visit.txt","a+");
//	echo fwrite($fh,"jjjjj");//输出字符串的长度
//	fclose($fh);
	//file_put_contents:默认修改文件内容 使用FILE_APPEND是添加操作
//	$str="hello";
//	file_put_contents("file_visit.txt","$str",FILE_APPEND);
	
	
	
	//应用：访问量
//	$num=file_get_contents("file_visit.txt");
//	$num++;
//	echo "<h1>该网页被访问了{$num}次</h1>";
//	file_put_contents("file_visit.txt","$num");
?>