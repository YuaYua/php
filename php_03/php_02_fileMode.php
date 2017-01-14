<?php
//	$page=filesize("visit.text");
	//对文件操作要修改文件的读写权限，直接打开文件所在文件夹，在文件的简介里修改权限
	//"w":修改全部内容
	//"a":添加到文件结尾
//	$fh=fopen("visit.txt","w+");
//	echo fwrite($fh,"hhhhhhh");
	//如果我们的权限是w或w+就会截断
	//会影响到我们呢下面的操作
	//filesize都没法获取我们文件的大小了
	//所以如果要在这种情况下使用需要将
	//filesize放在外面去获取，而且w的截断会给我们下面
	//的操作造成影响导致我们想要的效果无法实现
	//所以一般都是使用我们的file_get_contents
	//和file_put_contents来完成我们的操作
//	$nnn=fread($fh,$page);
//	fwrite($fh,$nnn);
//	fclose($fh);
	
	//file_put_contents:默认覆盖内容 使用FILE_APPEND是添加操作
//	$str="hello";
//	file_put_contents("text.txt",$str,FILE_APPEND);
	
	
	//应用：访问量
	//建一个新的.txt 文件，里面初始化化为0（访问量为零）
	//获取原始访问量
	$num=file_get_contents("visit.txt");
	//访问量加1
	$num++;
	echo "<h1>该网页访问了$num 次</h1>";
	//将新的访问量更新存储到.txt 文件
	file_put_contents("visit.txt","$num");
?>