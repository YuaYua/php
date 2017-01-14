<?php
	//haha.txt:是新建的文件。权限没打开，我们可以对他的父文件进行权限修改
	//copy:拷贝
//	if(copy("text.txt","haha.txt")){
//		echo "文件拷贝成功";
//	}else{
//		echo "文件拷贝失败";
//	}
	
	//rename:重命名
//	if(rename("text.txt","text1.txt")){
//		echo "重命名成功";
//	}else{
//		echo "重命名失败";
//	}

	//unlink:删除
	if(unlink("haha.txt")){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
?>