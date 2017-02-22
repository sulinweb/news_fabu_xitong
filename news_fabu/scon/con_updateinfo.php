<?php
include "../public/session.php";
include "../public/db.php";
$sid=$_GET["id"];
$cid=$_GET["pid"];
$stitle=$_GET["stitle"];
$scon=$_GET["scon"];
$username=$_SESSION["username"];
$db->query("update shows set cid='$cid',stitle='$stitle',scon='$scon' where sid=".$sid);
	if($db->affected_rows>0){
		$message = "修改成功";
		$url="../scon/con_guanli.php";
		include "../public/tiaozhuan.php";
	}else{
		$message = "修改失败或内容未改变";
		$url="../scon/con_guanli.php";
		include "../public/tiaozhuan.php";
	};

?>