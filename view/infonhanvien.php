<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    }
    $manv = $_GET['id'];
    include("../controller/c_nhanvien.php");
    $nhanvien = new nhanvien_controller();
    $row = $nhanvien->showInfoNhanVien($manv);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $row['1']; ?></title>
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
            <div class="card card-themnhanvien">
                <h5 class="card-header bg-primary">
                    Thông tin nhân viên
                </h5>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-6">
                                <div class="avatar infoavatar" style="background-image: url(<?= $row['11'] ?>);">
                                <img id="blah" src="#" alt="" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="manv">Mã nhân viên: </label>
                                    <input type="text" class="form-control" name="manv" id="manv" value="<?= $row['0'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="hoten">Họ và tên: </label>
                                    <input type="text" class="form-control" name="hoten" id="hoten" value="<?= $row['1'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gioitinh">Giới tính: </label>
                                    <input type="text" class="form-control" name="gioitinh" id="gioitinh" value="<?php 
                                        if($row['3']=="m") { echo "Nam";} 
                                        if($row['3']=="f") { echo "Nữ";} 
                                    ?>">
                                </div>
                                <div class="form-group">
                                    <label for="chucvu">Chức vụ: </label>
                                    <input type="text" class="form-control" name="chucvu" id="chucvu" value="<?php 
                                        if($row['6']==1)  {echo "Nhân viên văn phòng";}
                                        if($row['6']==2)  {echo "Nhân viên bán hàng";}
                                        if($row['6']==3)  {echo "Trưởng phòng";}
                                        if($row['6']==4)  {echo "Thư ký";}
                                        if($row['6']==5)  {echo "Phó giám đốc";}
                                        if($row['6']==6)  {echo "Giám đốc";}
                                    ?>">
                                </div>
                                <div class="form-group">
                                    <label for="phongban">Phòng ban: </label>
                                    <input type="text" class="form-control" name="phongban" id="phongban" value="<?php
                                        if($row['7']==1)  {echo "Phòng Marketing";}
                                        if($row['7']==2)  {echo "Kế toán - Tài Chính";} 
                                        if($row['7']==3)  {echo "Phòng Kinh Doanh";} 
                                        if($row['7']==4)  {echo "Phòng Nhân Sự";} 
                                        if($row['7']==5)  {echo "Phòng Kĩ Thuật";} 
                                        if($row['7']==6)  {echo "Ban Giám Đốc";}  
                                     ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa Chỉ: </label>
                            <input type="text" class="form-control" name="diachi" id="diachi" placeholder="1234 Tên Đường Thành phố" value="<?= $row['4'] ?>">
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="ngaysinh">Ngày sinh: </label>
                                <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" value="<?= $row['2'] ?>">
                            </div>
                            <div class="col-4">
                                <label for="sdt">Số điện thoại: </label>
                                <input type="text" name="sdt" id="sdt" class="form-control" value="<?= $row['5'] ?>">
                            </div>
                            <div class="col-4">
                                <label for="password">Mật khẩu: </label>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $row['10'] ?>">
                            </div>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary" name="btnThemNV" id="btnthem">Thêm nhân viên</button> -->
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