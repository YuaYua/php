<?php 
	//	结尾一定要加分号
    echo "hello world"; 
    // 变量的声明
    $age=18;
    $Age="12";
    echo "<hr>";
    	//	php中"+"只做加法运算
    echo $age+$Age;  //30
    echo "<hr>";
    	//	"."做字符串拼接
    echo $age.$Age;		//1812
    
    //变量的赋值
    //一，值赋值
    $num1="123";
    $num2=$num1;
    $num2="321";
    echo "<hr>";
    	echo $num1;		//123
    	//二、引用赋值(址赋值)
    	$name1="ppp";
    	$name2=&$name1;
    	echo "<hr>";
    	echo $name2;		//ppp
    	$name2="ooo";
    	echo "<hr>";
    	echo $name1;		//ooo
    	
    	
    	//变量的变量
    	$name="hello";
    	$$name="world";
    	echo "<hr>";
    	echo $name;		//hello
    	echo "<hr>";
    	echo $hello;		//world
    	echo "<hr>";
    	//$_SERVER是一个超全局变量
    	//实际上是一个关联数组
    	//想要从关联数组中取出值来
//  	print_r($_SERVER);
    	echo "<hr>";
    //echo 数组[值]就能取出数组中的值
    echo $_SERVER['SERVER_NAME'];
    //echo 不能输出数组
    echo $_SERVER	
    	
    
   
?>