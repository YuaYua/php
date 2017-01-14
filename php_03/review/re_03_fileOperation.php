<?php
	//copy
	//copy前需要将文件的权限打开，
	//因为 file03copy是新建的文件，不能找到，我们可以对其父级文件夹进行权限修改
//	if(copy("file03.txt","file03copy.txt")){
//		echo "拷贝成功";
//	}else{
//		echo "拷贝失败";
//	}
	
	//rename:重命名
//	if(rename("file03.txt","file03re.txt")){
//		echo "重命名成功";
//	}else{
//		echo "重命名失败";
//	}

	//unlink:删除文件
	if(unlink("file03copy.txt")){
		echo "删除文件成功";
	}else{
		echo "删除文件失败";
	}
?>