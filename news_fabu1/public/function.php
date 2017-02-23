<?php
//class abc{
//	function __construct(){
//		$this->str="";
//	}
//	function tree($pid,$flag,$db,$table){
//		$flag=$flag+1;
//		$result=$db->query("select * from $table where pid=".$pid);
//		while($row=$result->fetch_assoc()){
//			$cid=$row["cid"];
//			$cname=$row["cname"];
//			$str=str_repeat("--",$flag);
//			$this->str.="<option value='$cid'>{$str}{$cname}</option>";
//			$this->tree($row["cid"],$flag,$db,$table);
//		};
//	}
//	function table($pid,$flag,$db,$table){
//		$flag=$flag+1;
//		$result=$db->query("select * from $table where pid=".$pid);
//		while($row=$result->fetch_assoc()){
//			$cid=$row["cid"];
//			$cname=$row["cname"];
//			$pid=$row["pid"];
//			$str=str_repeat("--",$flag);
//			$this->str.="<tr><td>$cid</td><td>$cname</td><td>$pid</td>
//				<td>
//					<a href='tabledel.php?id=$cid'>删除</a>
//					<a href=''>修改</a>
//				</td></tr>";
//			$this->table($row["cid"],$flag,$db,$table);
//		}
//	}
//	function del($id,$db,$table){
//			$result=$db->query("select * from $table where pid=".$id);
//			while($row=$result->fetch_assoc()){
//				$cid=$row["cid"];
//				if($pid==$id){
//					$message = "有子类，不能删";
//					$url="guanliclass.php";
//					include "tiaozhuan.php";
//				}else{
//					$db->query("delete from category where id=".$id);
//					$message = "已删除";
//					$url="guanliclass.php";
//					include "tiaozhuan.php";
//				}
//			}
//		}
//	};	
?>