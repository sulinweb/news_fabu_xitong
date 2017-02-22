<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	.box{
		width:300px;
		height: 300px;
		border:1px solid #333;
		position:fixed;
		top:0;bottom:0;left:0;right:0;
		margin:auto;
		background:#eee;
	}
	.box_top{
		height: 50px;
		background:pink;
		text-align: center;
		line-height: 50px;
	}
	.box_bottom{
		height: 150px;
		width:200px;
		padding:50px;
	}
	.box_bottom div{
		margin-bottom: 50px;
	}
	span{
		color:red;
		font-size:20px;
		margin-left:20px;
		margin-right:10px;
	}
	a{
		color:red;
	}
</style>
<body>
	<div class="box">
		<div class="box_top"><?php echo $message?></div>
		<div class="box_bottom">
			<div><span>3</span>之后返回</div>
			<div>没有返回请点<a href="<?php echo $url?>">这里</a></div>
		</div>
	</div>
</body>
<script>
var num=3;
var span=document.getElementsByTagName("span")[0];
	var t=setInterval(function(){
		num--;
		if(num==0){
			location.href='<?php echo $url?>'
		}
		span.innerHTML=num;
	},1000)
</script>
</html>