<?php
	$db=mysql_connect("localhost","root","");
	mysql_select_db("php");
	mysql_query("set names utf8");
	define("PAGESIZE", 5);
	$page=0;
	if(isset($_GET["page"])){
		$page=$_GET["page"];
	}
	//查询记录数量的sql语句
	$query="select count(userId) from user";
	//该语句查询到的结果集中只有一条记录
	//没有必要使用 while 循环
	//直接用 fetch 方法
	//因为该语句如果要用关键数组取出我们的记录数量要写很多数组，凯哥很懒
	//所以使用 row 方法获取我们的结果数组
	//得到的是一个索引数组，并且里面只有一个元素就是$row[0]
	//也就是我们需要的记录个数
	//通过$row[0]将我们的记录个数存到变量中以供使用
	$result=mysql_query($query);
	$row=mysql_fetch_row($result);
//	var_dump($row);
	//总记录
	$count=$row[0];
//	echo $count;
	//分页数:向上取整
	$pages=ceil($count/PAGESIZE);
	echo $pages;
//	$name="观音";
//	$query="update user set name='$name',password=33333 where userId=20";
//	mysql_query($query);
//	mysql_affected_rows():受影响的行数
//	if(mysql_affected_rows()>0){
//		echo "插入成功";
//	}else{
//		echo "插入失败";
//	}

	
	$query1="select * from user limit ".$page*PAGESIZE.",".PAGESIZE;
	$result=mysql_query($query1);
	if(mysql_num_rows($result)){
		while ($row=mysql_fetch_assoc($result)) {
	?>	
	<h1><?php echo $row["name"].$row["password"]; ?></h1>
	<?php	
		}
	}	
?>

<?php 
    for ($i=0; $i <$pages ; $i++) { 
?>
	<a href="php_02_fenYe.php?page=<?php echo $i?>">
		<?php $num=$i+1;echo $num?>		
	</a>&nbsp; 
<?php
    } 
?>