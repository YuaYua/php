<?php
	$name="lck";
	$pass="123";
	
	$json='{"name":"'.$name.'","password":"'.$pass.'"}';
	
	$whats=json_decode($json,true);
	var_dump($whats);
//	$array=array("id"=>"asadf");
	$arr["name"]=$name;
	$arr["pass"]=$pass;
	echo "<hr>"; 
	echo json_encode($arr);
?>