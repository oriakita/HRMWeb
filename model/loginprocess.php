<?php
    include("database.php");
    $thongbao = null;
	if (isset($_POST["btn_submit"])) {
		
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "" || $password =="") {
			$thongbao = "Username hoặc Password bạn không được để trống!";
		}else{
			$sql = "select * from nhanvien where sdt = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows===0) {
				$thongbao= "Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{

				session_start();
				$_SESSION['username'] = $username;
                header('location: ./home.php');
			}
		}
	}
?>