<?php
	$url="http://TTT∂.BAIDU.COM";
//	echo $url;
//	echo "<hr>";
//	echo strtolower($url);
//	echo "<hr>";
//	echo $url;
	//查找字符(下标从零开始)
	//strpos(字符串,"要查找的字符",从第n个(包含n)开始查)
//	echo strpos($url,"tp",2);
	
	//替换
	$count=1;
//	str_replace("被替换的字符","替换成的字符",字符串,替换发生的次数);
//	echo str_replace("t","x",$url,$count);
//	echo "<hr>";
	//不是替换几个,而是发生替换的次数
//	echo $count;//结果:2
	
	//strstr(字符串,"查找起点",bool):当bool为true返回查找起点之前的内容(不包括查找起点),false返回查找起点后面的内容(包括查找起点)
//	echo strstr($url,"tt",false);
	
	//删除
	//ltrim(删除左侧) rtrim(删除右侧) trim(删除两端)
	$str="dadoisd fshoghda";
	echo "(".trim($str,"da").")";
	
	//删除html标签
	$str2 = "test<span>这是一个span</span> <a href=\"http://www.163.com\"><span>163</span</a>";
//	echo $str2;	
	echo strip_tags($str2,"<span></span>");
	
	$str3="<p>oijsdofjg</p>";
//	echo htmlspecialchars($str3);
?>