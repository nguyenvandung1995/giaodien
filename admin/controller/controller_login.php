<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$c_username = $_POST["c_username"];
		$c_password =$_POST["c_password"];
		
		$check = fetch_one("select * from tbl_admin where c_username='$c_username'");
		//$_SESSION["admin"] = $check["c_level"];
		if($check > 0){
			if($check["c_password"] == $c_password ){
				//gan c_username vao $_SESSION["usrname"]
				$_SESSION["username"] = $c_username;
				$_SESSION["pk_admin_id"]=$check["pk_admin_id"];
				header("location:index.php");	
			}
			else
				echo "<script>
						alert('Sai tên đăng nhập hoặc mật khẩu ')
					</script>";
					
		}
		else
			echo "<script>
					alert('Sai tên đăng nhập hoặc mật khẩu ')
				</script>";	
	}
	//echo md5("123456789");<div style='text-align:center;color:red'>Sai username hoặc password</div>
?>
