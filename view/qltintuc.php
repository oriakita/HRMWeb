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
    <title>Quản lý tin tức</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" type="text/css" href="css/qltintuc.css">
</head>

<body>
    <?php include("navbar.php"); ?>    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-dangtin">
                <h5 class="card-header bg-primary">
                    Quản lý tin tức
                </h5>
                <div class="card-body">
                    <div class="row">
                        <a href="dangtin.html" class="btn btn-success" id="btnTinMoi">Đăng tin mới</a>
                    </div>
                    <div class="row div-qltintuc">
                        <table id="table-qltintuc" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2">Loại tin</th>
                                    <th class="col-8">Tiêu đề</th>
                                    <th class="col-2">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="d-flex">
                                    <td class="col-2">Thông báo</td>
                                    <td class="col-8">Lịch nghỉ lễ ngày tết</td>
                                    <td class="col-2">
                                        <button class="btn btn-success">Sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">Thông báo</td>
                                    <td class="col-8">Lịch nghỉ lễ ngày tết</td>
                                    <td class="col-2">
                                        <button class="btn btn-success">Sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                <tr class="d-flex">
                                    <td class="col-2">Thông báo</td>
                                    <td class="col-8">Lịch nghỉ lễ ngày tết</td>
                                    <td class="col-2">
                                        <button class="btn btn-success">Sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>