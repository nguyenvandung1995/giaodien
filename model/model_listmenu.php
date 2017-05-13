<?php
	function list_menu(){
		global $model;
		$sql="select * from tbl_menu";
		$arr=$model->fetch($sql);
		return $arr;	
	}
	function get_id($id){
		global $model;
		$sql="select * from tbl_listmenu where fk_menu_id=$id limit 0,3 ";
		$arr=$model->fetch($sql);
		return $arr;	
	}
?>