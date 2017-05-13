<?php
	include("model/model_add_edit_menu.php");
	class controller_add_edit_menu{
		public $model_add_edit_menu;
		public function __construct(){
			$this->model_add_edit_menu=new model_add_edit_menu();
			$act = "";
			if(isset($_GET["act"]))
				$act = $_GET["act"];
			//----------------
			$form_control = "";
			switch($act){
				case 'add':
					$form_control="index.php?controller=add_edit_menu&act=do_add";
					include("view/view_add_edit_menu.php");
					break;
				case 'do_add':
					$arr["c_name"]=$_POST["c_name"];
					$this->model_add_edit_menu->insert($arr);
					header("location:index.php?controller=menu");
					break;
				case 'edit':
					$id=$_GET["id"];
					$arr=$this->model_add_edit_menu->get_id($id);
					$form_control="index.php?controller=add_edit_menu&act=do_edit&id=$id";
					include("view/view_add_edit_menu.php");
					break;
				case 'do_edit':
					$arr["id"]=$_GET["id"];
					$arr["c_name"]=$_POST["c_name"];
					$this->model_add_edit_menu->update($arr);
					header("location:index.php?controller=menu");
					break;
				
			}	
		}
	}
	$controller_add_edit_menu= new controller_add_edit_menu();
	
?>