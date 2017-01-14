<?php
	
//	$url="./txt";
	//①
//	if(mkdir("./txt")){
//		echo "创建成功";
//	}else{
//		echo "创建失败";
//	}
//	//只执行①不能使目录的权限和父级权限相同
//	//使用chmod()修改权限
//	//且 权限修改和目录创建必须一起使用才能修改权限
//	//不然会报文件已存在
//	chmod("./txt",0777);
	
	
	//安全性操作
	$url="./txt";
	if(file_exists($url)){
		echo "文件夹存在";
	}else{
		if(mkdir($url)){
			echo "文件创建成功";
		}else{
			echo "创建失败";
		}
		chmod("./txt",0777);
	}
?>