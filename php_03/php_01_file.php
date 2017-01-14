<?php
	//打开关闭文件，读取文件
	//一
	$fh=fopen("text.txt","r");
	
//	var_dump($fh);	//resource(3) of type (stream) :文件流
	//fread必须配合 fopen 进行使用
	//第一个参数是fopen的到的资源类型的文件流
	//第二个参数是我们想要读取的文件长度，如果是中文要一次读取4个长度
	//否则会出现乱码，如果要获取整个文件长度就要使用filesize("文件名")
	//读取文件流
	//fread($fh,filesize("文件名"));若filesize($fh)为数字n，则是读取n 个字节
	$str=fread($fh,filesize("text.txt"));
//	echo $str;
	fclose($fh);
	
	//二
	//逐行读取
	//feof:判断文件指针是不是在文件结尾
	$fh=fopen("text.txt","r");
	//方法一
//	$str1=fgets($fh);
//	echo $str1."<br/>";
//	$str1=fgets($fh);
//	echo $str1."<br/>";
//	$str1=fgets($fh);
//	echo $str1."<br/>";
	
	//方法二
	while (!feof($fh)) {
		$str1=fgets($fh);
		echo $str1."<br/>";
	}
	fclose($fh);
	
	
	//三
	//file()函数将文件读取到数组中，各元素由换行符分隔。
	$arr=file("text.txt");
	var_dump($arr);
	
	//四
	//file_get_contents()函数将文件内容读到字符串中;
	$string=file_get_contents("text.txt");
	echo $string;
?>