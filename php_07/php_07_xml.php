<?php
$xmlstr=<<<XML
<?xml version="1.0" encoding="utf-8"?>
<books>
</books>
XML;
	$xml=simplexml_load_string($xmlstr);
	include_once "sqp.php";
	$query="select * from book";
	$result=mysql_query($query);
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_assoc($result)){
//			var_dump($row);
			$book = $xml->addChild("book");
			foreach ($row as $key => $value) {
				$$key = $book->addChild($key,$value);
			}
		}
	}
	
//	$book = $xml->addChild("book");
//	$name = $book->addChild("name","海底两万里");
//	$book = $xml->addChild("book");
//	$name = $book->addChild("name","海底三万里");
	
	
//	var_dump($xml);
//	echo $xml->asXML();
	$xml->saveXML("new.xml");
	
?>