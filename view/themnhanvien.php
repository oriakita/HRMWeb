<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    }
    
    include("../model/m_themnhanvien.php");
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
    <nav class="navbar navbar-expand-md navbar-light bg-primary">
        <a class="navbar-brand" href="home.html"><img src="images/logobar.png" width="100" height="40"></a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item username">
                    <a class="nav-link" href="#">Xin chào
                        <?php echo $_SESSION['username'];?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inluong.html">In lương</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Nhân viên</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="timnhanvien.html">Tìm nhân viên</a>
                        <a class="dropdown-item" href="themnhanvien.html">Thêm nhân viên</a>
                        <a class="dropdown-item" href="chamcong.html">Chấm công</a>
                        <a class="dropdown-item" href="thanhtich.html">Đánh giá thành tích</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quanliphongban.html">Phòng Ban</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tuyendung.html">Tuyển Dụng</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="qltintuc.html">QL Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Đăng xuất</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm mọi thứ?...">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
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

                                </div>
                            </div>
                            <div class="col-1">
                                <input type="file" class="form-control-file inputfile" id="loadimages" name="loadimages">
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
</body>

</html>