<?php
    require_once("database.php");
    
	if (isset($_POST["btn_submit"])) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "" || $password =="") {
			echo "Username hoặc Password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{

				$_SESSION['username'] = $username;
                header('Location: home.html');
			}
		}
	}
?>