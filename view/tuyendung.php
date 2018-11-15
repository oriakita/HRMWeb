<?php
    session_start();
    if(!isset($_SESSION['username'])) 
    {
        header('location: ./login.php');
    } 
    include("../controller/c_tuyendung.php");
    $tuyendung = new tuyendung_controller();
    if(isset($_POST['btnXoaUngVien']))
    {
        $mauv = $_POST['maungvien'];
        $tuyendung->xoaUngVien($mauv);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí tuyển dụng</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/tuyendung.css" type="text/css">
</head>

<body conload="window.print();">
    <!-- -->
    <?php include("navbar.php") ?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-quanlituyendung">
                <h5 class="card-header bg-primary">
                    Quản lí tuyển dụng
                </h5>
                <div class="card-body">
                    <div class="row div-tuyendung">
                        <table id="table-tuyendung" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-3">Tên ứng viên</th>
                                    <th class="col-3">Vị trí ứng tuyển</th>
                                    <th class="col-3">Trình độ học vấn</th>
                                    <th class="col-3">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $row = $tuyendung->showUngVien();
                                    foreach($row as $value)
                                    {
                                        ?>
                                        <tr class="d-flex">
                                            <td class="col-3"><?= $value['1']; ?></td>
                                            <td class="col-3"><?= $value['9']; ?></td>
                                            <td class="col-3"><?= $value['8']; ?></td>
                                            <td class="col-1">
                                                <a href="infoungvien.php?id=<?= $value['0']; ?>" class="btn btn-primary" target="_blank">Xem</a>
                                                
                                            </td>
                                            <td class="col-2">
                                                <form action="" method="post" onsubmit="return confirm('Bạn muốn xóa ứng viên này?');">
                                                    <input type="text" value="<?= $value['0']; ?>" name="maungvien" style="display:none;">
                                                    <button type="submit" name="btnXoaUngVien" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>
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