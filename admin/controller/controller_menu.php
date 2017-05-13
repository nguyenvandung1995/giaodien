<?php
	include("model/model_menu.php");
	class controller_menu{
		//tao mot object de khoi tao doi tuong model
		public $model_menu;
		public function __construct(){
			$this->model_menu= new model_menu();
			//----------------
			$act=isset($_GET["act"])?$_GET["act"]:"";
			if($act=="delete"){
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
				$this->model_menu->delete($id);
				header("location:index.php?controller=menu");	
			}
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$menu_id=$_POST["menu_id"];
				while(list($key,$val)=@each($menu_id)){
					 //echo "$key - $val <br>";
					 $this->model_menu->delete($val);
				//delete("tbl_menu","pk_menu_id=$val");
				header("location:index.php?controller=menu");
				}
			}
			//phan trang
			$so_ban_ghi_tren_trang=5;
			$so_ban_ghi=$this->model_menu->total();
			$so_trang=ceil($so_ban_ghi/$so_ban_ghi_tren_trang);
			$trang=1;
			if(isset($_GET["p"])){
				if($_GET["p"]>0)
					$trang=$_GET["p"];	
			}
			$tu_trang=($trang-1)*$so_ban_ghi_tren_trang;
			//--------
			$arr_menu=$this->model_menu->list_menu($tu_trang,$so_ban_ghi_tren_trang);
			include_once("view/view_menu.php");
				
		}	
	}
$controller_menu= new controller_menu();
	
?>	