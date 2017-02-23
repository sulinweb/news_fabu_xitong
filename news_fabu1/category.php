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
	$result=$db->query("select * from category where pid=".$id);
	while($row=$result->fetch_assoc()){
	?>
	<div class="lanmu">
		<a href="list.php?cid=<?php echo $row['cid']?>&id=<?php echo $id?>"><?php echo $row["cname"]?></a>
	</div>
	<?php }?>
</body>
</html>