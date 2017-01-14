<?php
	$url="./test1";
	$arr=scandir($url);
	for ($i=2; $i <count($arr) ; $i++) { 
		unlink($url."/".$arr[$i]);
	}
	if (rmdir($url)) {
		echo "删除成功";
	} else {
		echo "删除失败";
	}
?>