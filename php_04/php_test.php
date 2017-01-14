<?php
	$url="./test";
	$arr=scandir($url);
	var_dump($arr);
	for ($i=2; $i <count($arr) ; $i++) { 
		unlink($url."/".$arr[$i]);
	}
	if(rmdir($url)){
		echo "成功";
	}else{
		echo "失败";
	}
?>