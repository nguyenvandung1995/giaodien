<?php
	function list_qlmenu(){
		global $model;
		$sql="select * from tbl_qlmenu";
		$arr=$model->fetch($sql);
		return $arr;	
	}
?>