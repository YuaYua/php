<?php
	//计算两个数的和
	
	//计算2+3的值并展示
	//无参无返
//	function add(){
//		echo 2+3;
//	}
//	add();
	
	//根据要计算的值进行计算
	//并显示结果
	//有参无返
//	function add($num1,$num2){
//		echo $num1+$num2;
//	}
//	add(2,4);

	//使用一个方法得到3+5的值，并将结果返回供我使用
	//无参有返
//	function add(){
//		return 3+5;
//	}
//	$sum=add();
//	echo $sum;
	
	//计算用户提供的两个数值
	//并将结果返回,以供使用
	//有参有返
	function add($num1,$num2){
		return $num1+$num2;
	}
	$sum=add(4,6);
	echo $sum;
	
?>