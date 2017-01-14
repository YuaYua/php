<style type="text/css">
	#top{
		width: 100%;
		height: 20%;
		/*position: absolute;
		top: 0;*/
		background: red;
	}
	#left{
		width: 20%;
		height: 80%;
		background: orange;
		float: left;
	}
	#right{
		width: 20%;
		height: 80%;
		background: orange;
		float: right;
	}
</style>



<?php
	include_once "top.php";
	include_once "left.php";
	include_once "right.php";
?>
<div id="content">
	我是内容
</div>