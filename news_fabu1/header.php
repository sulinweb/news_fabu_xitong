<?php
include "public/db.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<script src="public/jquery.min.js"></script>
</head>
<style>
	body,p,h1,h2,h3,h4,h5,h6,ul,li,input{
		margin:0;
		padding:0;
		list-style: none;/*清除列表标签的小圆点*/
		font-family: Arial,"微软雅黑","黑体";
		font-size: 12px;/*10*/
	}
	a{
		color:#333;
		text-decoration: none;/*去掉a标签下划线*/
	}
	img{
		border:0px;
		margin:0px;
	}
	.mainbav{
		width:750px;
		border:1px solid #333333;
		background: #CCCCCC;
		height: 50px;
		margin:50px auto;
		position:relative;
		z-index: 999;
	}
	.mainbav .first{
		background: red;;
	}
	.mainbav .shouye{
		color: #fff;
		background: green;
	}
	.mainxiao{
		width: 148px;
		height: 50px;
		border:1px solid #333333;
		text-align: center;
		line-height: 50px;
		float: left;
		font-size:16px;
		cursor: pointer;
	}
	.yirujs{
		display: none;
	}
	.yirujsxiao{
		width: 148px;
		height: 50px;
		border:1px solid #ccc;
		background: #eee;
		text-align: center;
		line-height: 50px;
	}
	a{
		display: inline-block;
		width:100%;
		height: 100%;
	}
</style>
<script type="text/javascript">
$(function(){
	$(".mainxiao").hover(function(){
		$(".yirujs").eq($(this).index()).slideDown("fast");
	},function(){
		$(".yirujs").eq($(this).index()).slideUp("fast");
	})
//	$(".mainxiao").click(function(){
//		$(".mainxiao").removeClass("first").eq($(this).index()).addClass("first");
//	})
})
</script>
<body>
	<div class="mainbav">
		<div class="mainxiao shouye">
			<a href="index.php">首页</a>
			<ul class="yirujs"></ul>
		</div>
		<?php 
			if(!isset($_GET['id'])){
		        $id=null;
		    }else{
		        $id=$_GET['id'];
		    }
		$result=$db->query("select * from category where pid=0");
		while($row=$result->fetch_assoc()){
		?>
		<div class="mainxiao <?php if($row["cid"]==$id){echo 'first';}?>">
			<a href="category.php?id=<?php echo $row['cid']?>"><?php echo $row["cname"]?></a>
			<ul class="yirujs">
				<?php 
				$result1=$db->query("select * from category where pid=".$row["cid"]);
				while($row1=$result1->fetch_assoc()){
				?>
				<li class="yirujsxiao"><a href="list.php?cid=<?php echo $row1['cid']?>&id=<?php 
				$result2=$db->query("select * from category where cid=".$row1["cid"]);	
				$row2=$result2->fetch_assoc();
					echo $row2['pid']?>"><?php echo $row1["cname"]?></a></li>
				<?php }?>
			</ul>
		</div>
		
		<?php }?>
	</div>