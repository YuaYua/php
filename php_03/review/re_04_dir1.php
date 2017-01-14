<?php
	
	//opendir:打开目录
	//"."代表当前php 所在的目录文件夹
	$fh=opendir(".");
	//".."代表当前php所在目录的上级目录
	$fh=opendir("../img");
	//readdir:此函数列出给定目录中的所有文件和子目录
	while ($files=readdir($fh)) {
		var_dump($files);
		echo "<hr>";
	}
	closedir($fh);
	
	//返回一个包含有 directory 中的文件和目录的数组;
//	$arr=scandir("./test1");
//	var_dump($arr);
	
	//rmdir:删除文件夹，要求文件夹内容为空
	//手动删除test1文件夹下的子文件及子文件夹
	//检查 test1 文件夹是不是空的
	$arr=scandir("./test1");
	var_dump($arr);
	//此时文件夹还有array(3) { [0]=> string(1) "." [1]=> string(2) ".." [2]=> string(9) ".DS_Store" } 
	//不需要删除".","..",但是需要删除".DS_Store";
	
//	$name=$arr[2];
//	unlink($name);
//	var_dump($arr);//输出后这样并不能删除".DS_Store"

	$name="./test1/".$arr[2];
	unlink($name);
	$arr=scandir("./test1");
	var_dump($arr);
	//上面的代码只可执行一次否则会报警告//再次执行前注释掉
	if (rmdir("test1")) {
		echo "删除成功";
	} else {
		echo "删除失败";
	}
	
	
?>