<?php
	//explode("分割依据"，字符串):返回由字符串组成的数组  
	//要有分割依据          
	$str1="1。2。3。4。5";
	echo $str1;
	$arr1=explode("。",$str1);
	print_r($arr1);
	echo "<hr>";
		
	//implode("组合依据"，字符串):返回由数组组成的字符串 
	//可以不要依据    
	$arr2=array("q","w","e","r");
	print_r($arr2);
	$str2=implode("",$arr2);
	echo $str2;
?>