<?php
	
	$url="./txt";
	if(file_exists($url)){
		echo "文件夹存在";
	}else{
		if(mkdir($url)){
			echo "文件创建成功";
		}else{
			echo "创建失败";
		}
	}
	
	
//	//①
//	if(mkdir("./txt")){
//		echo "创建成功";
//	}else{
//		echo "创建失败";
//	}
//	//该方法只能修改代码创建的目录
//	//就是说①和②必须一起执行才能修改权限
//	//②
//	chmod("./txt",0777);
?>