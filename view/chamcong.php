<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chấm công</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/chamcong.css" type="text/css">
</head>

<body>
    <!-- -->
    <?php include("navbar.php");?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-chamcong">
                <h5 class="card-header bg-primary">
                    Chấm công nhân viên
                </h5>
                <div class="card-body">
                    <div class="row">
                        <h5>Tháng 10</h5>
                    </div>
                    <div class="row div-select-pb">
                        <form action="">
                            <label for="select_phongban">Phòng ban: </label>
                            <select id="select_phongban" class="form-control">
                                <option value="mkt">Marketing</option>
                                <option value="kttc">Kế Toán - Tài Chính</option>
                                <option value="kd">Kinh Doanh</option>
                                <option value="ns">Nhân Sự</option>
                                <option value="kt">Kĩ Thuật</option>
                                <option value="bgd">Ban Giám Đốc</option>
                            </select>
                        </form>
                    </div>
                    <div class="row div-chamcong">
                        <table id="table-chamcong" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2">Mã nhân viên</th>
                                    <th class="col-4">Tên nhân viên</th>
                                    <th class="col-2">Số ngày làm</th>
                                    <th class="col-2">Ngày tăng ca</th>
                                    <th class="col-2">Vi phạm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                    <td class="col-2"><input class="input-number" type="number"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" id="btnNhapLuong" name="btnNhapLuong">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>