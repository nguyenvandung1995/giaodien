<?php 
	include("model/model_qlmenu.php");
	class controller_qlmenu{
		public $model_qlmenu;
		public function __construct(){
			$this->model_qlmenu=new model_qlmenu();
			$arr_qlmenu=$this->model_qlmenu->list_qlmenu();
			//delete
			$act="";
			if(isset($_GET["act"]))
			$act=$_GET["act"];
			if($act=='delete'){
				$id=$_GET["id"];
				$this->model_qlmenu->delete($id);
				header("location:index.php?controller=qlmenu");
			}
			include_once("view/view_qlmenu.php");	
		}	
	}
	$controller_qlmenu=new controller_qlmenu();
	
?>