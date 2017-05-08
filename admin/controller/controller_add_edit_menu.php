<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$arr_menu=fetch_one("select * from tbl_menu where pk_menu_id=$id");
			$form_control="index.php?controller=add_edit_menu&act=do_edit&id=$id";	
			break;
			case 'do_edit':
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$id=isset($_GET["id"])?$_GET["id"]:0;
					$c_name= htmlspecialchars($_POST["c_name"],ENT_QUOTES);
					execute("update tbl_menu set c_name='$c_name' where pk_menu_id=$id");
					header("location:index.php?controller=menu");	
				}
				break;
		case'add':
			$form_control="index.php?controller=add_edit_menu&act=do_add";
			break;
		case'do_add':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			
						
					execute("insert into tbl_menu(c_name) values('$c_name')");	
					header("location:index.php?controller=menu");	
			}
		
	}
	include_once("view/view_add_edit_menu.php");
?>