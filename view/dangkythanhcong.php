<?php
    include("../controller/c_tuyendung.php");
    $tuyendung = new tuyendung_controller();
    $hoten = null;
    $ngaysinh = null;
    $cmnd = null;
    $gioitinh = null;
    $diachi = null;
    $sdt = null;
    $email = null;
    $trinhdohv = null;
    $vitriungvien = null;
    if(isset($_POST['btnGuiTuyenDung'])) 
    {
        $hoten = $_POST['tenungvien'];
        $ngaysinh = $_POST['ngaysinhungvien'];
        $cmnd = $_POST['cmndungvien'];
        $gioitinh = $_POST['gioitinhungvien'];
        $diachi = $_POST['diachiungvien'];
        $sdt = $_POST['sdtungvien'];
        $email = $_POST['emailungvien'];
        $trinhdohv = $_POST['trinhdoungvien'];
        $vitriungvien = $_POST['vitriungvien'];
        $tuyendung->themUngVien($hoten, $ngaysinh, $cmnd, $gioitinh, $diachi, $sdt, $email, $trinhdohv, $vitriungvien);

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nộp đơn tuyển dụng</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/formtuyendung.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center r1">
            <i class="fas fa-check-circle fa-8x"></i><br>
        </div>
        <div class="row justify-content-center r2">
            <p>Đăng ký thành công</p>
        </div>
        <div class="row justify-content-center r3">
            <p>Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</p>
        </div>
        <div class="row justify-content-center r3">
            <a href="index.html">Về Trang Chủ</a>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>