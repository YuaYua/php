<?php
//	var_dump($_GET);
	include_once "sqp.php";
	$index=$_GET["bookid"];
//	echo $index;
	$query="select * from book where bookId='$index'";
//	echo $query;
	$result=mysql_query($query);
	$row=mysql_fetch_assoc($result);
//	var_dump($row);
?>

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
	
	#bookinfoDiv{
		width: 90%;
		height: 70vh;
		margin-top: 80px;
		margin-left: 5%;
	}
	#imgDiv{
		width: 50%;
		height: 100%;
		/*background: olive;*/
		float: left;
	}
	#imgDiv>img{
		width: 80%;
		height: 100%;
	}
	#infoDiv{
		width: 50%;
		height: 100%;
		/*background: palegreen;*/
		float: left;
		
	}
	#infotop{
		padding-bottom: 32px;
		margin-bottom: 32px;
		border-bottom: 1px solid gainsboro;
	}
	#infotop>h2{
		line-height: 34px;
	}
	#infotop>p{
		text-indent: 33px;
		line-height: 25px;
	}
	#infoCenter{
		background: #EBEBEB;
	}
	#infoCenter>div{
		margin-bottom: 20px;
	}
	.rmb{
		color: #FF2634;
		font-size: 2.5em;
	}
	#buyDiv{
		margin-left: 2%;
	}
	.buyBtn {
		border-style: hidden;
		width: 90px;
		height: 35px;
		text-align: center;
		line-height: 35px;
		color: white;
		border-radius: 3px;
	}
	.buyBtn1{
		background: #FF2533;
	}
	.buyBtn2{
		margin-left: 50%;
		background: #FFEDEE;
		border: 1px solid #FF2533;
		color: #FF2533;
	}
</style>
<div id="headbar">
	<div id="header">
		<ul class="headUl">
			<li><a href="#">书吧</a></li>
			<li><a href="bookstore.php">网站首页</a></li>
			<li><a href="#">关于我们</a></li>
			<li><a href="#">图书展示</a></li>
			<li><a href="#">联系我们</a></li>
			<li><a href="#">购物车</a></li>
			<li><a href="insertBook.html">添加图书</a></li>
		</ul>
	</div>
</div>
<div id="bookinfoDiv">
	<div id="imgDiv">
		<img src="bookstore img/<?php echo $row["pic"];?>"/>
	</div>
	<div id="infoDiv">
		<div id="infotop">
			<h2><?php echo $row["bookName"];?></h2>
			<p><?php echo $row["bookIntro"]?></p>
		</div>
		<div id="infoCenter">
			<div>
				<span>作者：</span><span><?php echo $row["author"]?></span>
			</div>
			<div>
				<span>出版社：</span><span><?php echo $row["publisher"]?></span>
			</div>
			<div>
				<span>出版时间：</span><span><?php echo $row["date"]?></span>
			</div>
			<div>
				<span>国际标准书号ISBN：</span><span><?php echo $row["ISBN"]?></span>
			</div>
			<div>
				<span>友情价格：</span><span class="rmb">￥</span><span class="rmb"><?php echo $row["price"]?></span>
			</div>
		</div>
		<div id="buyDiv">
			<a href="#"><button class="buyBtn buyBtn1">加入购物车</button></a>
			<a href="#"><button class="buyBtn buyBtn2">立即购买</button></a>
		</div>
	</div>
</div>