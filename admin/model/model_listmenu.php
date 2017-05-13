<?php
	class model_listmenu extends model{
		
		public function list_listmenu($tu_trang,$so_ban_ghi_tren_trang){
			$sql="select * from tbl_listmenu limit $tu_trang,$so_ban_ghi_tren_trang";
			$arr=$this->fetch($sql);
			return $arr;
			
		}
		public function total(){
			$sql="select pk_listmenu_id from tbl_listmenu";
			$num=$this->num_rows($sql);
			return $num;
		}
		public function delete($id){
			$sql="delete from tbl_listmenu where pk_listmenu_id=$id";
			$this->query($sql);
		}
		public function get_menu($pk_menu_id){
			$sql="select * from tbl_menu where pk_menu_id=$pk_menu_id";
			$arr=$this->fetch_one($sql);
			return $arr;	
		}	
	}
?>