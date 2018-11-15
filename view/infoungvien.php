<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    } 
    $mauv = $_GET['id'];
    include("../controller/c_tuyendung.php");
    $tuyendung = new tuyendung_controller();
    $row = $tuyendung->showInfoUngVien($mauv);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $row['1']; ?></title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/tuyendung.css" type="text/css">
</head>

<body conload="window.print();">
    <!-- -->
    <?php include("navbar.php"); ?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center bg-primary">
                        <h4>Thông tin cá nhân</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="ten-ungvien">Họ và tên: </label>
                                    <input type="text" name="ten-ungvien" id="ten-ungvien" class="form-control" value="<?= $row['1']; ?>">
                                </div>
                                <div class="col-6">
                                    <label for="ngaysinh-ungvien">Ngày sinh: </label>
                                    <input type="date" name="ngaysinh-ungvien" id="ngaysinh-ungvien" class="form-control" value="<?= $row['2']; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="cmnd-ungvien">Số CMND: </label>
                                    <input type="text" name="cmnd-ungvien" id="cmnd-ungvien" class="form-control" value="<?= $row['3']; ?>">
                                </div>
                                <div class="col-6">
                                    <label for="gioitinh-ungvien">Giới tính: </label>
                                    <input type="text" value="<?php if($row['4']=="m") {echo "Nam";} else { echo "Nữ";}; ?>" id="gioitinh-ungvien" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diachi-ungvien">Địa chỉ: </label>
                                <input type="text" name="diachi-ungvien" id="diachi-ungvien" class="form-control" value="<?= $row['5']; ?>">
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="sdt-ungvien">Số điện thoại: </label>
                                    <input type="text" name="sdt-ungvien" id="sdt-ungvien" class="form-control" value="<?= $row['6']; ?>">
                                </div>
                                <div class="col-6">
                                    <label for="email-ungvien">Địa chỉ email: </label>
                                    <input type="text" name="email-ungvien" id="email-ungvien" class="form-control" value="<?= $row['7']; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="trinhdo-ungvien">Trình độ học vấn: </label>
                                    <input type="text" id="trinhdo-ungvien" class="form-control" value="<?= $row['8']; ?>">
                                </div>
                                <div class="col-6">
                                    <label for="vitri-ungvien">Vị trí muốn ứng tuyển: </label>
                                    <input type="text" id="vitri-ungvien" class="form-control" value="<?= $row['9']; ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>