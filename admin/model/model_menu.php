<?php
	class model_menu extends model{
		//liet ke cac ban ghi
		public function list_menu($tu_trang,$so_ban_ghi_tren_trang){
			$sql="select * from tbl_menu limit $tu_trang,$so_ban_ghi_tren_trang";
			$arr=$this->fetch($sql);
			return $arr;
		}
		public function total(){
			$sql="select pk_menu_id from tbl_menu";
			$num=$this->num_rows($sql);
			return $num;	
		}
		public function delete($id){
			$sql="delete from tbl_menu where pk_menu_id=$id";
			$this->query($sql);	
		}	
	}
?>