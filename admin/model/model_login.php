<?php
	function check_login($arr){
		global $m;
		extract($arr);
		$sql="select * from tbl_admin where c_username='$c_username' and c_password='$c_password'";
		if($m->num_rows($sql)>0){
			$row=$m->fetch_one($sql);
			if($row["c_username"]==$c_username && $row["c_password"]==$c_password)
				return true;
		}
		return false;	
	}
	
?>