<?php
$xml=simplexml_load_file("new.xml");
//var_dump($xml);
$book=$xml->xpath("book");
foreach ($book as $key => $value) {
//	echo $value->bookName;
//	var_dump($value);
	foreach ($value as $keys => $val) {
		echo $keys.$val;
		echo "<hr>";
	}
}
?>