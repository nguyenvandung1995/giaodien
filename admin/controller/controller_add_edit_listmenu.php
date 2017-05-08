<?php
	$act=isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case'edit':
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$arr_listmenu=fetch_one("select * from tbl_listmenu where pk_listmenu_id=$id");
			$form_control="index.php?controller=add_edit_listmenu&act=do_edit&id=$id";	
			break;
			case 'do_edit':
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$id=isset($_GET["id"])?$_GET["id"]:0;
					$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
					$fk_menu_id = htmlspecialchars($_POST["fk_menu_id"],ENT_QUOTES);
					$c_description = htmlspecialchars($_POST["c_description"],ENT_QUOTES);
					$c_price = htmlspecialchars($_POST["c_price"],ENT_QUOTES);
					$c_status = htmlspecialchars($_POST["c_status"],ENT_QUOTES);
					
						execute("update tbl_listmenu set c_name='$c_name',fk_menu_id=$fk_menu_id, c_description='$c_description',c_price=$c_price,c_status=$c_status where pk_listmenu_id=$id");
					header("location:index.php?controller=listmenu");	
				}
				break;
		case'add':
			$form_control="index.php?controller=add_edit_listmenu&act=do_add";
			break;
		case'do_add':
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$c_name = htmlspecialchars($_POST["c_name"],ENT_QUOTES);
			$fk_menu_id = htmlspecialchars($_POST["fk_menu_id"],ENT_QUOTES);
			$c_description = htmlspecialchars($_POST["c_description"],ENT_QUOTES);
			$c_price = htmlspecialchars($_POST["c_price"],ENT_QUOTES);
			$c_status = htmlspecialchars($_POST["c_status"],ENT_QUOTES);
			
						
					execute("insert into tbl_listmenu(c_name,fk_menu_id,c_description,c_price,c_status) values('$c_name',$fk_menu_id,'$c_description',$c_price,$c_status)");	
					header("location:index.php?controller=listmenu");	
			}
		
	}
	include_once("view/view_add_edit_listmenu.php");
?>