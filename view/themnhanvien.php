<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    }
    include("../controller/c_nhanvien.php");
    $nhanvien = new nhanvien_controller();
    $manv = null;
    $hoten = null;
    $diachi = null;
    $ngaysinh = null;
    $sdt = null;
    $password = null;
    $file_name = null;

    if(isset($_POST['btnThemNV'])) {
        $hoten = $_POST['hoten'];
        $gioitinh = $_POST['gioitinh'];
        $chucvu = $_POST['chucvu'];
        $phongban = $_POST['phongban'];
        $diachi = $_POST['diachi'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $password = $_POST['password'];
        $file_name = $_FILES['loadimages']['name'];
        $file_tmpname = $_FILES['loadimages']['tmp_name'];
        $nhanvien->themNhanVien($hoten, $gioitinh, $chucvu, $phongban, $diachi, $ngaysinh, $sdt, $password, $file_name, $file_tmpname);
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm nhân viên</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/themnhanvien.css" type="text/css">
</head>

<body>
    <!-- -->
    <?php include("navbar.php"); ?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <?= $nhanvien->thongbao; ?>
        </div>
        <div class="row justify-content-center">
            <div class="card card-themnhanvien">
                <h5 class="card-header bg-primary">
                    Thêm nhân viên
                </h5>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-5">
                                <div class="avatar" style="background-image: url(images/avatar.png);">
                                <img id="blah" src="#" alt="" />
                                </div>
                            </div>
                            <div class="col-1">
                                <input type="file" class="form-control-file inputfile" id="loadimages" name="loadimages" accept="image/gif, image/jpeg, image/png"  onchange="readURL(this);">
                                <label for="loadimages"><i class="fas fa-camera-retro fa-2x"></i></label>
                            </div>
                            <div class="col-6">
                                <!-- <div class="form-group">
                                    <label for="manv">Mã nhân viên: </label>
                                    <input type="email" class="form-control" name="manv" id="manv" placeholder="MA-NV">
                                </div> -->
                                <div class="form-group">
                                    <label for="hoten">Họ và tên: </label>
                                    <input type="text" class="form-control" name="hoten" id="hoten" placeholder="Nguyên Văn A">
                                </div>
                                <div class="form-group">
                                    <label for="gioitinh">Giới tính: </label>
                                    <select id="gioitinh" name="gioitinh" class="form-control">
                                        <option value="m">Nam</option>
                                        <option value="f">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="chucvu">Chức vụ: </label>
                                    <select id="chucvu" name="chucvu" class="form-control">
                                        <option value="1">Nhân viên văn phòng</option>
                                        <option value="2">Nhân viên bán hàng</option>
                                        <option value="3">Trưởng phòng</option>
                                        <option value="4">Thư ký</option>
                                        <option value="5">Phó giám đốc</option>
                                        <option value="6">Tổng giám đốc</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phongban">Phòng ban: </label>
                                    <select id="phongban" name="phongban" class="form-control">
                                        <option value="1">Marketing</option>
                                        <option value="2">Kế Toán - Tài Chính</option>
                                        <option value="3">Kinh Doanh</option>
                                        <option value="4">Nhân Sự</option>
                                        <option value="5">Kĩ Thuật</option>
                                        <option value="6">Ban Giám Đốc</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa Chỉ: </label>
                            <input type="text" class="form-control" name="diachi" id="diachi" placeholder="1234 Tên Đường Thành phố">
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="ngaysinh">Ngày sinh: </label>
                                <input type="date" id="ngaysinh" name="ngaysinh" class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="sdt">Số điện thoại: </label>
                                <input type="text" name="sdt" id="sdt" class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="password">Mật khẩu: </label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btnThemNV" id="btnthem">Thêm nhân viên</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>

</html>