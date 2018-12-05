<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    }
    include("../controller/c_nhanvien.php");
    $nhanvien = new nhanvien_controller(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu nhân viên</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/timnhanvien.css" type="text/css">
</head>

<body>
    <!-- -->
    <?php include("navbar.php"); ?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="card card-timnhanvien">
                <h5 class="card-header bg-primary">
                    Tra cứu nhân viên
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="box">
                            <div class="container-1">
                                <a href="#" class="icon"><i class="fa fa-search"></i></a>
                                <input type="search" id="search" placeholder="Nhập tên nhân viên" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5>Kết quả tìm kiếm</h5>
                    </div>
                    <div class="row">
                    <table id="table-tuyendung" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2">Mã NV</th>
                                    <th class="col-4">Tên nhân viên</th>
                                    <th class="col-3">Phòng Ban</th>
                                    <th class="col-3">Chức Vụ</th>
                                </tr>
                            </thead>
                            <tbody id="mybodytable">
                                <?php
                                    $row = $nhanvien->showNhanVien();
                                    foreach($row as $value)
                                    {
                                        ?>
                                        <tr class="d-flex">
                                            <td class="col-2"><?= $value['0']; ?></td>
                                            <td class="col-4"><a href="infonhanvien.php?id=<?= $value['0']; ?>" target="_blank"><?= $value['1']; ?></a></td>
                                            <td class="col-3">
                                                <?php 
                                                if($value['7']==1)  {echo "Phòng Marketing";}
                                                if($value['7']==2)  {echo "Kế toán - Tài Chính";} 
                                                if($value['7']==3)  {echo "Phòng Kinh Doanh";} 
                                                if($value['7']==4)  {echo "Phòng Nhân Sự";} 
                                                if($value['7']==5)  {echo "Phòng Kĩ Thuật";} 
                                                if($value['7']==6)  {echo "Ban Giám Đốc";}  
                                                ?>
                                            </td>
                                            <td class="col-3">
                                                <?php 
                                                if($value['6']==1)  {echo "Nhân viên văn phòng";}
                                                if($value['6']==2)  {echo "Nhân viên bán hàng";}
                                                if($value['6']==3)  {echo "Trưởng phòng";}
                                                if($value['6']==4)  {echo "Thư ký";}
                                                if($value['6']==5)  {echo "Phó giám đốc";}
                                                if($value['6']==6)  {echo "Giám đốc";}
                                                ?>
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
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var keyword = $('#search').val();
                $.post("A_timnhanvien.php", {tukhoa: keyword}, function(data){
                    // $('#datasearch').empty();
                    $('#mybodytable').html(data);
                })
            })
        })
    </script>
</body>

</html>