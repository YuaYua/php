<?php
	
	//上传文件
	//输出从 HTML 得到的文件信息
	var_dump($_FILES);
	//安全性操作
	//判断是否存在img 文件夹
	//如果不存在就进行创建，若创建失败，就 return 
	//return后下面的代码不执行
	if(!file_exists("./img")){
		if (!mkdir("./img")) {
			echo "上传失败";
			return;
		}
	}
	//方法一
	if(is_uploaded_file($_FILES["img"]["tmp_name"])){
		copy($_FILES["img"]["tmp_name"],"./img/".$_FILES["img"]["name"]);
    }else{
		echo "文件上传失败！";
    }

	//方法二
	//move_uploaded_file()作用是将上传文件从临时目录移动到目标目录
//	move_uploaded_file($_FILES["img"]["tmp_name"],"./img/".$_FILES["img"]["name"]);
?>