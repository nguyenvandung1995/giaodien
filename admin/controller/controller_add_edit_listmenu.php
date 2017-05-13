<?php
	include("model/model_add_edit_listmenu.php");
	class controller_add_edit_listmenu{
		public $model_add_edit_listmenu;
		public function __construct(){
			$this->model_add_edit_listmenu=new model_add_edit_listmenu();
			$act = "";
			if(isset($_GET["act"]))
				$act = $_GET["act"];
			//----------------
			$form_control = "";
			switch($act){
				case 'add':
					$form_control="index.php?controller=add_edit_listmenu&act=do_add";
					include("view/view_add_edit_listmenu.php");
					break;
				case 'do_add':
					$arr["c_name"]=$_POST["c_name"];
					$arr["fk_menu_id"]=$_POST["fk_menu_id"];
					$arr["c_description"]=$_POST["c_description"];
					$arr["c_price"]=$_POST["c_price"];
					$arr["c_status"]=$_POST["c_status"];
					//print_r($arr);
					$this->model_add_edit_listmenu->insert($arr);
					header("location:index.php?controller=listmenu");
					break;
				case 'edit':
					$id=$_GET["id"];
					$arr=$this->model_add_edit_listmenu->get_id($id);
					$form_control="index.php?controller=add_edit_listmenu&act=do_edit&id=$id";
					include("view/view_add_edit_listmenu.php");
					break;
				case 'do_edit':
					$arr["id"]=$_GET["id"];
					$arr["c_name"]=$_POST["c_name"];
					$arr["fk_menu_id"]=$_POST["fk_menu_id"];
					$arr["c_description"]=$_POST["c_description"];
					$arr["c_price"]=$_POST["c_price"];
					$arr["c_status"]=$_POST["c_status"];
					$this->model_add_edit_listmenu->update($arr);
					header("location:index.php?controller=listmenu");
					break;
			}
		}
	}
	
	$controller_add_edit_listmenu= new controller_add_edit_listmenu();
?>