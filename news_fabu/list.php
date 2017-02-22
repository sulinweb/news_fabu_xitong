<?php
include "header.php";
?>
	--------------------------------------------------这是list页的内容
	<style>
		.timu{
			width: 500px;;
			margin:10px auto;
			background: #CCCCCC;
		}
		.aa{
			width: 100%;
			display: inline;
			background: pink;
			margin:10px;
		}
	</style>
	<?php
	include "public/db.php";
	$id=$_GET["id"];
	$result=$db->query("select * from shows where cid=".$id);
	while($row=$result->fetch_assoc()){
	?>
	<div class="timu">
		栏目：<a class="aa" href="show.php?id=<?php echo $row['sid']?>"><?php echo $row["cid"]?></a><br />
		标题：<a class="aa" href="show.php?id=<?php echo $row['sid']?>"><?php echo $row["stitle"]?></a><br />
		时间：<a class="aa" href="show.php?id=<?php echo $row['sid']?>"><?php echo $row["stime"]?></a><br />
		作者：<a class="aa" href="show.php?id=<?php echo $row['sid']?>"><?php echo $row["username"]?></a><br />
	</div>
	<?php }?>
</body>
</html>