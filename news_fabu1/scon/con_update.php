<?php
include "../public/session.php";
include "../public/db.php";
$id=$_GET["id"];
//include "function.php";
//$tree=new abc();
//$tree->tree(0,1,$db,"category");
$result4=$db->query("select * from shows where sid=".$id);
$row4=$result4->fetch_assoc();
$fuid=$row4["cid"];
$stitle=$row4["stitle"];
$scon=$row4["scon"];
$sid=$row4["sid"];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<form action="con_updateinfo.php">
	<select name="pid">
		<option value="0">目录</option>
		<?php 
			$result=$db->query("select * from category where pid=0");
			while($row=$result->fetch_assoc()){
		?>
			<option value="<?php echo $row['cid']?>" <?php if($row['cid']==$fuid){?>
				selected='selected';
				<?php }?>><?php echo $row["cname"]?></option>
			<?php 
				$result1=$db->query("select * from category where pid=".$row['cid']);
				while($row1=$result1->fetch_assoc()){
			?>
				<option value="<?php echo $row1['cid']?>" <?php if($row1['cid']==$fuid){?>
				selected='selected';
				<?php }?>>--<?php echo $row1["cname"]?></option>
				<?php 
					$result2=$db->query("select * from category where pid=".$row1['cid']);
					while($row2=$result2->fetch_assoc()){
				?>
					<option value="<?php echo $row2['cid']?>" <?php if($row2['cid']==$fuid){?>
				selected='selected';
				<?php }?>>----<?php echo $row2["cname"]?></option>
				<?php 
				}
				?>
			<?php 
			}
			?>
		<?php 
		}
		?>
	</select>
	题目：<input type="text" name="stitle" value="<?php echo $stitle?>"/>
	<input type="hidden" name="id" value="<?php echo $sid?>"/>
	内容：<textarea name="scon" id="" cols="30" rows="10"><?php echo $scon?></textarea>
	<input type="submit" value="修改"/>
</form>
</body>
</html>