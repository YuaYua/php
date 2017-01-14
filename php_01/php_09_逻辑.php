<?php
	$arrs=array(1,2,3,4,5);
	for ($i=0; $i < count($arrs); $i++) { 
		if($arrs[$i]==3){
			//结束整个循环
//			break;
			//结束当前单次循环
//			continue;
		}
		echo $arrs[$i]."<hr>";
	}
	foreach ($arrs as $values) {
		echo $values."<hr>";
	}
?>