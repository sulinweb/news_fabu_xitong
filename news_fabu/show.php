<?php
include "header.php";
?>
	-------------------------------------------------------------这是show页的内容<br />
	<style>
		.con{
			width:800px;
			height: 600px;;
			margin:100px auto;
		}
	</style>
	<?php
	include "public/db.php";
	$id=$_GET["id"];
	$result=$db->query("select * from shows where sid=".$id);
	while($row=$result->fetch_assoc()){
	?>
	<div class="con">
		<div style="margin-bottom: 20px;"><?php echo $row["stitle"]?></div>
		<?php echo $row["scon"]?>
	</div>
	
	<?php }?>
</body>
</html>