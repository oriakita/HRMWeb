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
    <title>Đánh giá thành tích</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" type="text/css" href="css/chamcong.css">
</head>

<body>
    <!--NAVBAR-->
    <?php include("navbar.php"); ?>
    <!--END NAVBAR-->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-thanhtich">
                <h5 class="card-header bg-primary">
                    Đánh giá thành tích
                </h5>
                <div class="card-body">
                    <div class="row">
                        <h5>Năm 2018</h5>
                    </div>
                    <div class="row div-chamcong">
                        <table id="table-chamcong" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2">Mã nhân viên</th>
                                    <th class="col-4">Tên nhân viên</th>
                                    <th class="col-6" style="text-align: center;">Thành tích</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <form>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai1" value="loai1">
                                            Loại 1</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai2" value="loai2">
                                            Loại 2</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai3" value="loai3">
                                            Loại 3</td>
                                    </form>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <form>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai1" value="loai1">
                                            Loại 1</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai2" value="loai2">
                                            Loại 2</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai3" value="loai3">
                                            Loại 3</td>
                                    </form>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">001</td>
                                    <td class="col-4">Nguyễn Văn A</td>
                                    <form>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai1" value="loai1">
                                            Loại 1</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai2" value="loai2">
                                            Loại 2</td>
                                        <td class="col-2"><input type="radio" name="myradio" id="loai3" value="loai3">
                                            Loại 3</td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" id="btnThanhTich" name="btnThanhTich">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>