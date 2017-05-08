<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$arr_qlmenu=fetch_one("select * from tbl_qlmenu where pk_qlmenu_id=$id");
			$form_control="index.php?controller=add_edit_qlmenu&act=do_edit&id=$id";	
			break;
			case 'do_edit':
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$id=isset($_GET["id"])?$_GET["id"]:0;
					$c_name= htmlspecialchars($_POST["c_name"],ENT_QUOTES);
					$c_link= htmlspecialchars($_POST["c_link"],ENT_QUOTES);
						execute("update tbl_qlmenu set c_name='$c_name',c_link='$c_link' where pk_qlmenu_id=$id");
					header("location:index.php?controller=qlmenu");	
				}
				break;
		case'add':
			$form_control="index.php?controller=add_edit_qlmenu&act=do_add";
			break;
		case'do_add':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			$c_link = htmlspecialchars($_POST["c_link"],ENT_QUOTES);
						
					execute("insert into tbl_qlmenu(c_name,c_link) values('$c_name','$c_link')");	
					header("location:index.php?controller=qlmenu");	
			}
		
	}
	include_once("view/view_add_edit_qlmenu.php");
?>