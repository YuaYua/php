<?php
	$db=mysql_connect("localhost","root","");
	mysql_select_db("php");
	mysql_query("set names utf8");
	
	//分页
	define('PAGESIZE', 2);
	//当前页数初始化为零防止第一次打开没有从a标签get到 page
	$page=0;
	//如果从a标签get到 page则$page就是从a 标签获得的 page
	if(isset($_GET["page"])){
		$page=$_GET["page"];
	}
	//查询记录数量的sql语句
	$query="select count(userId) from user";
	$result=mysql_query($query);
	$row=mysql_fetch_row($result);
	//得到总记录数
	$count=$row[0];
	//得到分页数，向上取整
	$pages=ceil($count/PAGESIZE);
	
	$query1="select * from user limit ".$page*PAGESIZE.",".PAGESIZE;
	$result=mysql_query($query1);
	if(mysql_num_rows($result)){
		while ($row=mysql_fetch_assoc($result)) {
?>
		<h1>
			<?php 
			    echo $row["name"].$row["password"]; 
			?>
		</h1>
<?php			
		}
	}
?>


<?php 
	//根据总页数循环创建a标签
    for ($i=0; $i <$pages ; $i++) { 
?>
	<!--a标签的href地址写本页并且将页数传给php的$_GET全局变量-->
	<a href="fenye.php?page=<?php echo $i?>">
		<!--因为页数是由 for 循环得到的（从零开始）而显示要从一开始-->
		<?php 
		    $num=$i+1;
		    echo $num; 
		?>
	</a>
<?php    		
    } 
?>