<?php
	$array=array(
	"id"=>array("name"=>"haha","password"=>123),
	"class"=>array("name"=>"heihei","password"=>456)
	);
	var_dump($array);
	echo "<hr>";
//	echo $array["id"]["name"];

	foreach ($array as $key1 => $firstValue) {
		echo "value是:";
		var_dump($firstValue);
		echo "<hr>";
		foreach ($firstValue as $key => $value) {
			echo $key."是".$value;
			echo "<hr>";
		}
		
	}
?>