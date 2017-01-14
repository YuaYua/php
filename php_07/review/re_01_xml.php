<?php
$xmlstr=<<<XML
<?xml version="1.0" encoding="utf-8"?>
<books>
</books>
XML;
//echo $xmlstr;
	$xml=simplexml_load_string($xmlstr);
	include_once "../sqp.php";
	$query="select * from book";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		while ($row=mysql_fetch_assoc($result)) {
			$book=$xml->addChild("book");
			foreach ($row as $key => $value) {
				$$key=$book->addChild($key,$value);
			}
		}
	}
//	var_dump($xml);
	$xml->saveXML("book.xml");

?>