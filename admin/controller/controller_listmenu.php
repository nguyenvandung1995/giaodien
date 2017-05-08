<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=="delete"){
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_listmenu where pk_listmenu_id=$id");
		header("location:index.php?controller=listmenu");	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$listmenu_id=$_POST["listmenu_id"];
		while(list($key,$val)=@each($listmenu_id)){
			 //echo "$key - $val <br>";
		execute("delete from tbl_listmenu where pk_listmenu_id=$val");
		header("location:index.php?controller=listmenu");
		}
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 5;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_listmenu");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_listmenu = fetch("select * from tbl_listmenu order by pk_listmenu_id desc limit $from,$record_perpage");
	//$arr_listlistmenu=fetch("select * from tbl_listmenu");
	include_once("view/view_listmenu.php");
?>	