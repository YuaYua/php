<?php
	
	//"."代表当前php 所在的目录文件夹
	$fh=opendir(".");
	//".."代表当前 PHP 所在目录的上一级目录
	$fh=opendir("../php_02");
	while($files=readdir($fh)){
//		var_dump($files);
//		echo "<hr>";
	}

//	$files=readdir($fh);
	closedir($fh);
	
	//检查 test1文件夹是不是空的
	$arr=scandir("./test1");
//	echo $arr[2]."<hr>";
//	var_dump($arr);
//	$name=$arr[2];//不是 test1的.DS_Store文件而是 test1 的父级的
//	获取 test1 的.DS_Store
//	$name="./test1/".$arr[2];
//	echo $name;
//	unlink($name);
	//上面的代码只可执行一次否则会报警告//执行后注释掉
	
	$arr=scandir("./test1");
	var_dump($arr);
//	删除文件夹：要求文件夹内是空的
	if(rmdir("test1")){
		echo "删除目录成功";
	}else{
		echo "删除目录失败";
	}
	
	
	
//	var_dump($arr);
	
	
	
?>