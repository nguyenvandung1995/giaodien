<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	if($act=="delete"){
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		execute("delete from tbl_reservations where pk_reservations_id=$id");
		header("location:index.php?controller=reservations");	
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$reservations_id=$_POST["reservations_id"];
		while(list($key,$val)=@each($reservations_id)){
			 //echo "$key - $val <br>";
		execute("delete from tbl_reservations where pk_reservations_id=$val");
		header("location:index.php?controller=reservations");
		}
	}
	//=========================
	//controller
	//so ban ghi tren 1 trang
	$record_perpage = 5;
	//tong so ban ghi
	$total_record = fetch_one("select count(*) as total from tbl_reservations");
	//lay tong so trang
	$num_page = ceil($total_record["total"]/$record_perpage);
	$page = 1;
	//lay trang hien tai
	$page = isset($_GET["p"]) ? $_GET["p"]:0;
	$page = $page <= 0 ? 0: $page-1;
	//cac ban ghi hien thi tren trang do
	$from = $page * $record_perpage;
	//thuc hien truy van khi da co cac thong tin o tren
	$arr_reservations = fetch("select * from tbl_reservations order by pk_reservations_id desc limit $from,$record_perpage");
	//$arr_listreservations=fetch("select * from tbl_reservations");
	include_once("view/view_reservations.php");
?>	