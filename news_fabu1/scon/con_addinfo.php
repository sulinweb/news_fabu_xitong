<?php
include "../public/session.php";
include "../public/db.php";
$cid=$_GET["pid"];
$stitle=$_GET["stitle"];
$scon=$_GET["scon"];
$username=$_SESSION["username"];
$db->query("insert into shows (cid,stitle,scon,username) values ('$cid','$stitle','$scon','$username')");
if($db->affected_rows>0){
	$message = "添加内容成功";
	$url="../scon/con_add.php";
	include "../public/tiaozhuan.php";
}
?>