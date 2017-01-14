<?php
	//打开关闭文件
	//fopen()将resource绑定到一个流或句柄
	$fh=fopen("file_test.txt","r");
	var_dump($fh);
	echo "<br/>";
	//读取文件
	//①读取想要的长度 fread($fh,3)
	//第一个参数是fopen得到的资源类型的文件流
	//第二个参数是我们想要读取的文件长度，如果是中文要一次读取3个长度
	//否则会出现乱码，如果要获取整个文件长度就要使用filesize("文件名")
//	$str=fread($fh,3);
//	echo $str;
//	echo "<br/>";
	
	//② 逐行读取
	//2.1	多写几次，每次读一行
//	$str1=fgets($fh);
//	echo $str1;
//	echo "<br/>";
//	$str1=fgets($fh);
//	echo $str1;
//	echo "<br/>";
	
	//2.2	循环读取，用feof(判断文件指针是否到达文件结尾)
//	while (!feof($fh)) {
//		$str1=fgets($fh);
//		echo $str1."<br/>";
//	}
	//关闭文件
	fclose($fh);
	//③file()函数将文件读取到数组中，各元素由换行符分隔。
//	$arr=file("file_test.txt");
//	var_dump($arr);
	
	//④file_get_contents()函数将文件内容读到字符串中;
	$str2=file_get_contents("file_test.txt");
	echo $str2;
	
	
?>