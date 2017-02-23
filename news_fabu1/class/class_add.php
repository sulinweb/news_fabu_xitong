<?php
include "../public/session.php";
include "../public/db.php";
//include "function.php";
//$tree=new abc();
//$tree->tree(0,1,$db,"category");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
<form action="class_addinfo.php">
	<select name="pid">
		<option value="0">目录</option>
		<?php 
			$result=$db->query("select * from category where pid=0");
			while($row=$result->fetch_assoc()){
		?>
			<option value="<?php echo $row['cid']?>"><?php echo $row["cname"]?></option>
			<?php 
				$result1=$db->query("select * from category where pid=".$row['cid']);
				while($row1=$result1->fetch_assoc()){
			?>
				<option value="<?php echo $row1['cid']?>">--<?php echo $row1["cname"]?></option>
				<?php 
					$result2=$db->query("select * from category where pid=".$row1['cid']);
					while($row2=$result2->fetch_assoc()){
				?>
					<option value="<?php echo $row2['cid']?>">----<?php echo $row2["cname"]?></option>
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
	<input type="text" name="cname"/>
	<input type="submit" value="提交"/>
</form>
</body>
</html>