<?php
    include('../controller/c_phongban.php');
    $manv = $_GET['id'];
    $nhanvien = new phongban_controller();
    $row = $nhanvien->showOneNhanVienChamCong($manv);
    foreach($row as $value) {
        $tongtien = $value['0'];
        $maluong = $value['1'];
        $ngaycong = $value['2'];
        $tangca = $value['3'];
        $vipham = $value['4'];
        $mathang = $value['5'];
        $hoten = $value['6'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>In hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/inluong.css">
</head>
<body>
    <div class="container">
        <div class="row myrow1">
            <div class="col-4">
                <h5>Công ty Điện máy Biển Xanh</h5>
                <h5>Mã tháng: <?=$mathang?></h5>
            </div>
            <div class="col-8">
                <h3 id="chxhcnvn">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3>
                <h5 id="dltdhp">Độc lập - Tự do - Hạnh phúc</h5>
            </div>
        </div>
        <div class="row myrow2 justify-content-center">
            <h2>PHIẾU LƯƠNG NHÂN VIÊN</h2>
        </div>
        <div class="row myrowhoten">
            <div class="col-3 offset-1">
                <h5>Họ và tên:</h5>
            </div>
            <div class="col-7">
                <h5><span style="color:Blue;"><?=$hoten?></span>  (Mã NV: <?=$manv?>)</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <h5>Mã lương:</h5>
            </div>
            <div class="col-7">
                <p><?=$maluong?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <h5>Số ngày công:</h5>
            </div>
            <div class="col-7">
                <p><?=$ngaycong?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <h5>Số ngày tăng ca:</h5>
            </div>
            <div class="col-7">
                <p><?=$tangca?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <h5>Mức phạt vi phạm (%):</h5>
            </div>
            <div class="col-7">
                <p><?=$vipham?> %</p>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-1">
                <h5>Tổng tiền lương:</h5>
            </div>
            <div class="col-7">
                <h5 style="color:Green;"><?=$tongtien?> VNĐ</h5>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>