<?php
	include("model/model_listmenu.php");
	class controller_listmenu{
		public $model_listmenu;
		public function __construct(){
			$this->model_listmenu=new model_listmenu();
			//delete
				$act=isset($_GET["act"])?$_GET["act"]:"";
			if($act=="delete"){
				$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
				//execute("delete from tbl_listmenu where pk_listmenu_id=$id");
				//delete("tbl_listmenu","pk_listmenu_id=$id");
				$this->model_listmenu->delete($id);
				header("location:index.php?controller=listmenu");	
			}
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$listmenu_id=$_POST["listmenu_id"];
				while(list($key,$val)=@each($listmenu_id)){
					 //echo "$key - $val <br>";
				//execute("delete from tbl_listmenu where pk_listmenu_id=$val");
				//delete("tbl_listmenu","pk_listmenu_id=$val");
				$this->model_listmenu->delete($val);
				header("location:index.php?controller=listmenu");
				}
			}
			//phan trang
			$so_ban_ghi_tren_trang=5;
			$so_ban_ghi=$this->model_listmenu->total();
			$so_trang=ceil($so_ban_ghi/$so_ban_ghi_tren_trang);
			$trang=1;
			if(isset($_GET["p"])){
				if($_GET["p"]>0)
					$trang=$_GET["p"];	
			}
			$tu_trang=($trang-1)*$so_ban_ghi_tren_trang;
			//--------
			$arr_listmenu=$this->model_listmenu->list_listmenu($tu_trang,$so_ban_ghi_tren_trang);
			include_once("view/view_listmenu.php");	
		}
		
	}
$controller_listmenu= new controller_listmenu();
	
?>	