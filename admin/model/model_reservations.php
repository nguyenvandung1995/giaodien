<?php
	class model_reservations extends model{
		public function list_reservations($tu_trang,$so_ban_ghi_tren_trang){
			$sql="select * from tbl_reservations limit $tu_trang,$so_ban_ghi_tren_trang";
			$arr=$this->fetch($sql);
			return $arr;
		}
		public function total(){
			$sql="select pk_reservations_id from tbl_reservations";
			$num=$this->num_rows($sql);	
			return $num;
		}
	}
?>