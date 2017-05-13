<?php
	function insert($arr){
		global $model;
		extract($arr);
		$sql="insert into tbl_reservations(c_name,c_email,c_date,c_number) values('$c_name','$c_email','$c_date',$c_number)";
		$model->query($sql);	
	}
?>