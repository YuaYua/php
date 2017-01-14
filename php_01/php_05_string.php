<?php
	$name="lck";
	//使用变量的值用双引号
	echo "hello,$name";//hello,lck
	
	echo "<hr>";
	//使用变量名用单引号
	echo 'hello,$name';//hello,$name
	echo "<hr>";
	//遇到$解析器会把$后面的都当做变量名，这时用{}将变量名包裹起来
	echo "hello,{$name}hahaha";
	$str = <<<OOO
	sdoifjorgijsogj.
OOO;
echo $str;
?>