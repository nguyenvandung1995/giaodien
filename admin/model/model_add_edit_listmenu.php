<?php
	class model_add_edit_listmenu extends model{
		public function get_id($id){
			$sql="select * from tbl_listmenu where pk_listmenu_id=$id";
			$arr=$this->fetch_one($sql);
			return $arr;
		}
		public function update($arr){
			extract($arr);
			$sql="update tbl_listmenu set c_name='$c_name',fk_menu_id=$fk_menu_id,c_description='$c_description',c_price=$c_price,c_status=$c_status where pk_listmenu_id=$id ";
			$this->query($sql);	
		}
		public function insert($arr){
			extract($arr);
			$sql="insert into tbl_listmenu(c_name,fk_menu_id,c_description,c_price,c_status) values('$c_name',$fk_menu_id,'$c_description',$c_price,$c_status)";
			$this->query($sql);
		}
		public function get_menu(){
			$sql="select * from tbl_menu";
			$arr=$this->fetch($sql);
			return $arr;	
		}	
	}
?>