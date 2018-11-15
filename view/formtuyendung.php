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
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <img src="images/logobienxanh.png" alt="logobienxanh">
                        <h4>Thông tin cá nhân</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="ten-ungvien">Họ và tên: </label>
                                    <input type="text" name="tenungvien" id="ten-ungvien" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <label for="ngaysinh-ungvien">Ngày sinh: </label>
                                    <input type="date" name="ngaysinhungvien" id="ngaysinh-ungvien" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="cmnd-ungvien">Số CMND: </label>
                                    <input type="text" name="cmndungvien" id="cmnd-ungvien" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <label for="gioitinh-ungvien">Giới tính: </label>
                                    <select id="gioitinh-ungvien" name="gioitinhungvien" class="form-control">
                                        <option value="m">Nam</option>
                                        <option value="f">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diachi-ungvien">Địa chỉ: </label>
                                <input type="text" name="diachiungvien" id="diachi-ungvien" class="form-control" required>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="sdt-ungvien">Số điện thoại: </label>
                                    <input type="text" name="sdtungvien" id="sdt-ungvien" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <label for="email-ungvien">Địa chỉ email: </label>
                                    <input type="email" name="emailungvien" id="email-ungvien" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="trinhdo-ungvien">Trình độ học vấn: </label>
                                    <select class="form-control" name="trinhdoungvien" id="trinhdo-ungvien">
                                        <option value="Tốt nghiệp cấp 3">Tốt nghiệp cấp 3</option>
                                        <option value="Tốt nghiệp đại học" selected>Tốt nghiệp đại học</option>
                                        <option value="Trên đại học">Trên đại học</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="vitri-ungvien">Vị trí muốn ứng tuyển: </label>
                                    <select id="vitri-ungvien" name="vitriungvien" class="form-control">
                                        <option value="Nhân viên bán hàng">Nhân viên bán hàng</option>
                                        <option value="Nhân viên kinh doanh">Nhân viên kinh doanh</option>
                                        <option value="Nhân viên Marketing">Nhân viên Marketing</option>
                                        <option value="Thư ký văn phòng">Thư ký văn phòng</option>
                                    </select>
                                </div>
                            </div>
                            <a href="index.html" class="btn btn-secondary" id="btnHuyTuyenDung">Hủy</a>
                            <button type="submit" name="btnGuiTuyenDung" id="btnGuiTuyenDung" class="btn btn-primary">Đăng ký ứng tuyển</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>