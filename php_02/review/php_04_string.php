<?php
	$str1="aAbABcDefaA";
	echo $str1;
	echo "<hr>";
		
	//strlen(数组名)获取字符串的长度
	echo strlen($str1);
	echo "<hr>";
		
	//将字符串转换为小写字母
	echo strtolower($str1);
	echo "<hr>";
		
	//将字符串转换为大写字符
	echo strtoupper($str1);
	echo "<hr>";
	
	
	//查找	
	//找到则返回第一次出现位置，否则返回 false(什么也不输出)
	//strpos(数组名，"要查找的元素"，开始查找位置):区分大小写
	echo strpos($str1,"A",3);
	//stripos(数组名，"要查找的元素"，开始查找位置):不区分大小写
	echo stripos($str1,"A");
	echo "<hr>";
		
	//替换
	//str_replace("被替换的元素"，"替换成"，字符串[，$count]):区分大小写
	//$count不能直接写一个数，count 代表的是被替换的次数，而不是要替换多少个
	//$count=1;
	echo str_replace("a","@",$str1,$count);
	echo "<hr>";
	echo $count;//2
	echo "<hr>";
	//str_ireplace("被替换的元素"，"替换成"，字符串[，$count]):不区分大小写
	echo str_ireplace("a","@",$str1,$count);
	echo "<hr>";
	echo $count;//5
	echo "<hr>";
		
	
	//截取字符串
	//substr(字符串，start[,length]):从 start(包含 start) 开始截取length（省略则截取到末尾）个
	echo substr($str1,4,3);
	echo "<hr>";
		
	//搜索:在字符串中找不到搜索元素，什么也不输出
	//strstr(字符串,"开始元素"[,bool]):从开始元素开始搜索，默认向后搜索(搜索结果包括开始元素)，
	//当设置bool值为 true 时,向前搜索（搜索结果不包括开始元素）；区分大小写
	echo strstr($str1,"A",true);
	echo "<hr>";
	//stristr(字符串,"开始元素"[,bool]):同上，不区分大小写
	echo stristr($str1,"A");
	echo "<hr>";
	
	//删除
	//trim(字符串[,元素])：删除开头和结尾的字符元素
	//ltrim(字符串[,元素])：删除开头的字符元素
	//rtrim(字符串[,元素])：删除结尾的字符元素
	//若未定义要删除的元素，则会删除一些特殊字符，见课件
	echo trim($str1,"bA");
	echo "<hr>";
	
	//反转字符串
	echo strrev($str1);
	echo "<hr>";
	
	$str2="qwer
	yuio";
	echo $str2;
	echo "<hr>";	
	//nl2br():将字符串中的换行转换成 HTML换行标签<br/>
	echo nl2br($str2);
	echo "<hr>";
	
	//strip_tags(字符串[,要保留的标签])删除字符串中的 HTML 标签，若没有要保留的标签，则删除所有标签
	$str3 = "test<span>这是一个span</span> <a href=\"http://www.163.com\"><span>163</span</a>";
//	echo $str3;
	echo "<hr>";
	echo strip_tags($str3,"<span></span>");
	
	//htmlspecialchars():将一些预定义的字符（见课件）转换为 HTML 实体
	$str4="'";
	echo htmlspecialchars($str4);
	
	
?>