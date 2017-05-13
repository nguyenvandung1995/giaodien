<?php
	include("model/model_reservation.php");
	$data=array();
	$error=array();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//if(isset($_POST["btl"])){
		$arr["c_name"]=$_POST["c_name"];
		$arr["c_email"]=$_POST["c_email"];
		$arr["c_date"]=$_POST["c_date"];
		$arr["c_number"]=$_POST["c_number"];
		//$date=date("d-m-Y",time());
		//if(strtotime($arr["c_date"]) < strtotime($date)){
			//$error["c_date"]="Ngay Nhap sai";
			
		//}
		//if($arr["c_number"]<=0){
			//$error["c_number"]="nhap so luong sai";	
		//}
		insert($arr);
			//ob_clean();
			ob_clean();
			header("location:index.php");
		//if(empty($error)){
			
			
		//}
		
		
		//print_r($arr);
	}
	include_once("view/view_reservations1.php");
?>