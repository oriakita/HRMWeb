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
                            <?php 
                                include("../controller/c_phongban.php");
                                $phongban = new phongban_controller();
                                $row = $phongban->showPhongBan();
                                foreach($row as $value)
                                {
                                    ?>
                                    <option value="<?= $value['0']; ?>"><?= $value['1']; ?></option>
                                    <?php
                                }
                            ?>
                                
                                
                            </select>
                        </form>
                    </div>
                    <div class="row div-chamcong">
                        <table id="table-chamcong" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-1">Mã nhân viên</th>
                                    <th class="col-3">Tên nhân viên</th>
                                    <th class="col-2">Số ngày làm</th>
                                    <th class="col-2">Ngày tăng ca</th>
                                    <th class="col-2">Vi phạm</th>
                                    <th class="col-1">Tổng tiền</th>
                                    <th class="col-1">Tính</th>
                                </tr>
                            </thead>
                            <tbody class="tablebody">
                                
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#select_phongban").change(function(){
                var id = $("#select_phongban").val();
                $.post("data.php", {id: id}, function(data){
                    $(".tablebody").html(data);
                });                
            });
        });
    </script>
</body>

</html>