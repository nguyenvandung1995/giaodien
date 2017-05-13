<?php
	class model_qlmenu extends model{
		public function list_qlmenu(){
			$sql="select * from tbl_qlmenu";
			$arr=$this->fetch($sql);
			return $arr;	
		}
		public function delete($id){
			$sql="delete from tbl_qlmenu where pk_qlmenu_id=$id";	
			$this->query($sql);
		}	
	}
?>