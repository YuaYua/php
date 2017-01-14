<?php
	
	//操作②
//	$arr=scandir("./test1");
//	var_dump($arr);
//	$name=$arr[2];不能这样写，这样写获得的是当前文件所在的目录下的文件，而不是 test 下的文件
//	$name="./test1/".$arr[2];
//	echo $name;
//	unlink($name);
	$arr=scandir("./test1");
	var_dump($arr);
	//要删除的文件必须是空文件
	//系统的文件系统会自动生成.DS_Store隐藏文件
	//此时我们进行②操作检测文件是不是空的
	//
	
	//操作①
	if(rmdir("test1")){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
?>