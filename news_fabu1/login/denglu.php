<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登录</title>
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
		<form action="dengluYZ.php" method="POST">
			<div class="shuru">登录</div><br /><br />
			账号：<input type="text" name="username" autocomplete="off" value=""/><br /><br />
			密码：<input type="text" name="password" autocomplete="off" value=""/><br /><br />
			<!--<input type="hidden" name="id" value=""/>-->
			<input type="submit" value="登录"/>
			<a class="qx" href="zhuce.php">注册</a>
		</form>
	</div>
</body>
<script>

</script>
</html>