<?php
	include("model/model_reservations.php");
	class controller_reservations{
		public $model_reservations;
		public function __construct(){
			$this->model_reservations=new model_reservations();
			//phan trang
			//phan trang
			$so_ban_ghi_tren_trang=10;
			$so_ban_ghi=$this->model_reservations->total();
			$so_trang=ceil($so_ban_ghi/$so_ban_ghi_tren_trang);
			$trang=1;
			if(isset($_GET["p"])){
				if($_GET["p"]>0)
					$trang=$_GET["p"];	
			}
			$tu_trang=($trang-1)*$so_ban_ghi_tren_trang;
			//--------
			$arr_reservations=$this->model_reservations->list_reservations($tu_trang,$so_ban_ghi_tren_trang);	
			include_once("view/view_reservations.php");
		}	
	}
	$controller_reservations=new controller_reservations();
	
?>	