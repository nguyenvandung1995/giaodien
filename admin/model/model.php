<?php
	class model{
		public $db;
		public function __construct(){
			global $link;
			$this->db=$link;	
		}
		public function fetch($sql){
			$result=mysqli_query($this->db,$sql);
			$arr=array();
			//duyet cac ban ghi
			while($rows=mysqli_fetch_array($result))
			$arr[]=$rows;
			return $arr;
		}
		//lay thong tin cua 1 ban ghi
		public function fetch_one($sql)
		{
			$result=mysqli_query($this->db,$sql);
			return mysqli_fetch_array($result);	
		}
		public function num_rows($sql){
			$result=mysqli_query($this->db,$sql);
			return mysqli_num_rows($result);	
		}
		public function query($sql){
			mysqli_query($this->db,$sql);	
		}	
	}
?>