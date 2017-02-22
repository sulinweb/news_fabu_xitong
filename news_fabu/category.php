<?php
include "header.php";
?>

	--------------这是category页的内容
	<style>	
	.lanmu{
		width:100px;
		height: 70px;;
		float: left;
		margin:50px;
		background: #eee;
		border:1px solid $ccc;
		text-align: center;
		line-height: 70px;;
		font-size: 20px;;
	}
	</style>
	<?php
	include "public/db.php";
	$id=$_GET["id"];
	$result=$db->query("select * from category where pid=".$id);
	while($row=$result->fetch_assoc()){
	?>
	<div class="lanmu"><a href="list.php?id=<?php echo $row['cid']?>"><?php echo $row["cname"]?></a></div>
	<?php }?>
</body>
</html>