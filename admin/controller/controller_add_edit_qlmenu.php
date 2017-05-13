<?php
	include("model/model_add_edit_qlmenu.php");
	class controller_add_edit_qlmenu{
		public $model_add_edit_qlmenu;
		public function __construct(){
			$this->model_add_edit_qlmenu=new model_add_edit_qlmenu();
			$act = "";
			if(isset($_GET["act"]))
				$act = $_GET["act"];
			//----------------
			$form_control = "";
			switch($act){
				case 'add':
					$form_control = "index.php?controller=add_edit_qlmenu&act=do_add";
					include_once("view/view_add_edit_qlmenu.php");	
					break;
				case 'do_add':
					$arr["c_name"]=$_POST["c_name"];
					$arr["c_link"]=$_POST["c_link"];
					$this->model_add_edit_qlmenu->insert($arr);
					header("location:index.php?controller=qlmenu");
					break;
				case 'edit':
					$id=$_GET["id"];
					$arr=$this->model_add_edit_qlmenu->get_id($id);
					$form_control="index.php?controller=add_edit_qlmenu&act=do_edit&id=$id";
					include_once("view/view_add_edit_qlmenu.php");	
					break;
				case 'do_edit':
					$arr["id"]=$_GET["id"];
					$arr["c_name"]=$_POST["c_name"];
					$arr["c_link"]=$_POST["c_link"];
					$this->model_add_edit_qlmenu->update($arr);
					header("location:index.php?controller=qlmenu");
					break;
					
					
			}
			
		}	
	}
	$controller_add_edit_qlmenu= new controller_add_edit_qlmenu();

	
?>