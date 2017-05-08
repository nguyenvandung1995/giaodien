<?php 
	
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=="delete"){
		$id=isset($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_qlmenu where pk_qlmenu_id=$id");
		header("location:index.php?controller=qlmenu");
			
	}
	$arr_qlmenu=fetch("select * from tbl_qlmenu");
	include_once("view/view_qlmenu.php");
?>