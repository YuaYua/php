<?php
	session_start();
	
	//对 session 进行操作的时候如果是赋值这种的
	//会立刻显现
	//而如果是销毁这种的在当前页面是无法生效的
	//销毁后必须转到下一个页面或刷新销毁才生效
	session_destroy();
?>
<a href="index1.php">验证</a>