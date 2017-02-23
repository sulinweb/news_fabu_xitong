<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>注册</title>
	<script src="../public/jquery.min.js"></script>
</head>
<style>
	.box{
		width:300px;
		height: 200px;
		border:1px solid #333;
		position:fixed;
		top:0;bottom:0;left:0;right:0;
		margin:auto;
		background:#eee;
		text-align: center;
	}
	.shuru{
		color:#fff;
		background:green;
		height: 50px;
		line-height: 50px;
	}
	.qx{
		color:#666;
	}
</style>
<body>
	<div class="box">
		<form action="add.php" method="POST">
			<div class="shuru">注册</div><br /><br />
			账号：<input type="text" name="username"/><br />
			<span></span><br />
			密码：<input type="text" name="password"/><br />
			<span></span><br />
			<input type="submit" value="注册"/>
			<a class="qx" href="denglu.php">登录</a>
		</form>
	</div>
	
</body>
<script>
	var reg=/^\w{6,10}$/;
	//账号
	$("input[name=username]").keyup(function(){
		var val=$(this).val();
		if(!reg.test(val)){
			$("span").eq(0).css({"color":"red","font-size":"12px"}).html("请输入6-10位数字或字母")
		}else{
			$("span").eq(0).css({"color":"green","font-size":"12px"}).html("格式正确")
			$.ajax({
				url:"select.php",
				data:{username:val},
				type:"POST",
				success:function(obj){
					if(obj=="ok"){
						$("span").eq(0).css({"color":"green","font-size":"12px"}).html("账号可用")
					}else if(obj=="error"){
						$("span").eq(0).css({"color":"red","font-size":"12px"}).html("账号已存在")
					}
				}
			})
		}
	})
	//密码
	$("input[name=password]").keyup(function(){
		var val=$(this).val();
		if(!reg.test(val)){
			$("span").eq(1).css({"color":"red","font-size":"12px"}).html("请输入6-10位数字或字母")
		}else{
			$("span").eq(1).css({"color":"green","font-size":"12px"}).html("格式正确")
		}
	})
</script>
</html>