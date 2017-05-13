<?php 
	include("model/model_login.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$arr["c_username"] = $_POST["c_username"];
		$arr["c_password"] =$_POST["c_password"];
		//repalce ky tu dac biet
		$arr["c_username"]==str_replace("'", "&#39;", $arr["c_username"]);
		$arr["c_password"]==str_replace("'", "&#39;", $arr["c_password"]);
		if(check_login($arr)==true){
				//gan c_username vao $_SESSION["usrname"]
				$_SESSION["username"] = $arr["c_username"];
				//$_SESSION["pk_admin_id"]=$check["pk_admin_id"];
				header("location:index.php");	
		}
		else{
				echo "<script>
						alert('Sai tên đăng nhập hoặc mật khẩu ')
					</script>";
					
		}
		
	}
?>
