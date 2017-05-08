<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=="delete"){
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_menu where pk_menu_id=$id");
		header("location:index.php?controller=menu");	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$menu_id=$_POST["menu_id"];
		while(list($key,$val)=@each($menu_id)){
			 //echo "$key - $val <br>";
		execute("delete from tbl_menu where pk_menu_id=$val");
		header("location:index.php?controller=menu");
		}
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 5;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_menu");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_listmenu = fetch("select * from tbl_menu order by pk_menu_id desc limit $from,$record_perpage");
	//$arr_listmenu=fetch("select * from tbl_menu");
	include_once("view/view_menu.php");
?>	