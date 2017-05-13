<?php
	class model_add_edit_menu extends model{
		public function insert($arr){
			extract($arr);
			$sql="insert into tbl_menu(c_name) values('$c_name')";
			$this->query($sql);	
		}
		public function get_id($id){
			$sql="select * from tbl_menu where pk_menu_id=$id";
			$arr=$this->fetch_one($sql);
			return $arr;
		}
		public function update($arr){
			extract($arr);
			$sql="update tbl_menu set c_name='$c_name' where pk_menu_id=$id";
			$this->query($sql);	
		}
	}
?>