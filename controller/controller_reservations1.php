<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//if(isset($_POST["btl"])){
		$c_name=$_POST["c_name"];
		$c_email=$_POST["c_email"];
		$c_date=$_POST["inputDatetator1"];
		$c_number=$_POST["c_number"];
		execute("insert into tbl_reservations(c_name,c_email,c_date,c_number) values('$c_name','$c_email','$c_date',$c_number)");

        //$dinh_dang_cu =$c_date;  
		//$dinh_dang_moi = date("d-m-Y", strtotime($dinh_dang_cu));  
		//echo "Định dạng cũ: " .$dinh_dang_cu."<br>";
		//echo "Định dạng mới: " .$dinh_dang_moi."<br>";
       echo "<script>alert('Gửi Thành Công')</script>";
		
	}
	include_once("view/view_reservations1.php");
?>