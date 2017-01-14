<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			ul{
				list-style-type: none;
			}
			a{
				text-decoration: none;
				color: #8A8A8A;
			}
			#headbar{
				width: 90%;
				padding:0 5%;
				background: #222222;
				position: fixed;
				z-index: 1;
				top: 0;
			}
			#header{
				width: 100%;
				/*height: 80px;*/
			}
			.headUl:after{
				content: "";
				display: block;
				clear: both;
			}
			.headUl>li{
				float: left;
				width: 10%;
				height: 80px;
				
			}
			.headUl>li>a{
				width: 100%;
				display: block;
				text-align: center;
				line-height: 80px;
				color: #8A8A8A;
			}
			.headUl>li>a:hover{
				color:white;
				background: #080808;
			}
			#bookDiv{
				padding: 10px;
				text-align: center;
				margin: 0 auto;
				margin-top: 80px;
				position: relative;
				width: 70%;
				/*height: 50vh;*/
				background: orange;
			}
			#bookDiv>h1{
				margin: 20px auto;
			}
			#bookForm{
				position: relative; 
				width: 100%;
				height: 100%;                                                   
			}
			#bookin{
				width: 100%;
				height: 320px;
				position: relative;
				margin-left: 7%;
			}
			#bookin>span{
				position: absolute;
				display: block;
				right: 87%;
			}
			#bookin>span:nth-of-type(1){
				top: 0;
				
			}
			#bookin>span:nth-of-type(2){
				top: 40px;
			}
			#bookin>span:nth-of-type(3){
				top: 80px;
			}
			#bookin>span:nth-of-type(4){
				top: 120px;
			}
			#bookin>span:nth-of-type(5){
				top: 160px;
			}
			#bookin>span:nth-of-type(6){
				top: 200px;
			}
			#bookin>span:nth-of-type(7){
				top: 240px;
			}
			#bookin>span:nth-of-type(8){
				top: 280px;
			}
			#bookin>input{
				border-style: none;
				position: absolute;
				display: block;
				width: 70%;
				height: 25px;
				border: 1px solid gainsboro;
				border-radius: 3px;
				left: 15%;
			}
			#bookin>input:nth-of-type(1){
				top: -8px;
			}
			#bookin>input:nth-of-type(2){
				top: 32px;
			}
			#bookin>input:nth-of-type(3){
				top: 72px;
			}
			#bookin>input:nth-of-type(4){
				top: 112px;
			}
			#bookin>input:nth-of-type(5){
				top: 152px;
			}
			#bookin>input:nth-of-type(6){
				top: 192px;
			}
			#bookin>input:nth-of-type(7){
				top: 232px;
			}
			#bookin>input:nth-of-type(8){
				top: 280px;
				border: initial;
			}
			#bookin>input:nth-of-type(9){
				top: 320px;
				width: 38px;
				background-color: white;
			}
		</style>
	</head>

	<body>
		<div id="headbar">
			<div id="header">
				<ul class="headUl">
					<li><a href="#">书吧</a></li>
					<li><a href="bookstore.php">网站首页</a></li>
					<li><a href="#">关于我们</a></li>
					<li><a href="#">图书展示</a></li>
					<li><a href="#">联系我们</a></li>
					<li><a href="#">购物车</a></li>
					<li><a href="insertBook.php">添加图书</a></li>
				</ul>
			</div>
		</div>
		<div id="bookDiv">
			<h1>添加图书</h1>
			<form id="bookForm" action="insertBook.php" method="post" enctype="multipart/form-data">
				<div id="bookin">
					<span>书名：</span><input type="text" name="bookName" id="" value="" placeholder="书名" />
					<span>简介：</span><input type="text" name="bookIntro" id="" value="" placeholder="简介" />
					<span>作者：</span><input type="text" name="author" id="" value="" placeholder="作者" />
					<span>出版社：</span><input type="text" name="publisher" id="" value="" placeholder="出版社" />
					<span>出版日期：</span><input type="text" name="date" id="" value="" placeholder="出版日期" />
					<span>价格：</span><input type="text" name="price" id="" value="" placeholder="价格" />
					<span>ISBN：</span><input type="text" name="isbn" id="" value="" placeholder="ISBN" />
					<span>书籍图片：</span><input type="file" name="bookImg" id="" value="" />
				</div>
				<input type="submit" value="添加" />
			</form>
		</div>
	</body>

</html>
<?php 
if(!empty($_POST)){
//	 print_r($_POST); //获得 text 类型input
//	echo $_POST["bookName"];
//  print_r($_FILES); //获得文件类型 input
	$bookName=$_POST["bookName"];
	$bookIntro=$_POST["bookIntro"];
	$author=$_POST["author"];
	$publisher=$_POST["publisher"];
	$date=$_POST["date"];
	$price=$_POST["price"];
	$isbn=$_POST["isbn"];
	$bookImg=$_FILES["bookImg"]["name"];
	
    //链接数据库服务器
    $db=mysql_connect("localhost","root","");
    mysql_query("set names utf8");
    if($db){
//  		//选择数据库
    		mysql_select_db("php");
    		//将数据添加到数据库
    		$query="insert into book(bookName,bookIntro,author,publisher,date,price,ISBN,pic) values('$bookName','$bookIntro','$author','$publisher','$date',$price,'$isbn','$bookImg')";
//  		echo $query;
		//执行添加语句
		mysql_query($query);
		if(mysql_affected_rows()>0){
			echo "插入成功";
		}else {
			echo "插入失败";
		}
	}
}
   
    
?>