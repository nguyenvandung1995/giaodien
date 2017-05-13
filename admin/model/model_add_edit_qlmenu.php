<?php
	class model_add_edit_qlmenu extends model{
		public function get_id($id){
			$sql="select * from tbl_qlmenu where pk_qlmenu_id=$id";
			$arr=$this->fetch_one($sql);
			return $arr;	
		}
		public function update($arr){
			extract($arr);
			$sql="update tbl_qlmenu set c_name='$c_name',c_link='$c_link' where pk_qlmenu_id=$id";
			$this->query($sql);	
		}
		public function insert($arr){
			extract($arr);
			$sql="insert into tbl_qlmenu(c_name,c_link) values('$c_name','$c_link')";
			$this->query($sql);
		}	
	}
?>