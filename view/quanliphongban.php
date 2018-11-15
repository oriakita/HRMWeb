<?php
    session_start();
    include("../controller/c_phongban.php");
    $phongban = new phongban_controller();
    if(!isset($_SESSION['username'])) 
    {
        header('location: ./login.php');
    }
    $mapb = null;
    $tenpb = null;
    $truongphong = null;

    if(isset($_POST['btnThemPhongBan'])) 
    {
        $mapb = $_POST['inputMaPhongBan'];
        $tenpb = $_POST['inputTenPhongBan'];
        $truongphong = $_POST['inputTruongPhong'];
        $phongban->themPhongBan($mapb, $tenpb, $truongphong);
        
    }

    if(isset($_POST['btnSuaPhongBan']))
    {
        $mapb = $_POST['maphong'];
        $tenpb = $_POST['edittenphongban'];
        $truongphong = $_POST['editmatruongphong'];
        $phongban->suaPhongBan($mapb, $tenpb, $truongphong);
        
    }

    if(isset($_POST['btnXoaPhongBan']))
    {
        $mapb = $_POST['mapb'];
        $phongban->xoaPhongBan($mapb);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lí phòng ban</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
    <link rel="stylesheet" href="css/quanliphongban.css" type="text/css">
</head>

<body conload="window.print();">
    <!-- -->
    <?php include("navbar.php");?>
    <!-- KẾT THÚC NAVBAR -->

    <div class="container-fluid">
        <div class="row justify-content-center div-message">
            <?php 
                $phongban->showMessage();
            ?>
        </div>
        <div class="row justify-content-center">
            <div class="card card-quanliphongban">
                <h5 class="card-header bg-primary">
                    Quản lí phòng ban
                </h5>
                <div class="card-body">
                    <div class="row">
                        <button type="button" class="btn btn-success" id="btnThemPB">Thêm
                            Phòng Ban</button>
                    </div>
                    <div class="row div-themphongban">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="col-2">
                                    <label for="inputMaPhongBan">Mã PB: </label>
                                    <input type="text" name="inputMaPhongBan" id="inputMaPhongBan" class="form-control">
                                </div>
                                <div class="col-5">
                                    <label for="inputTenPhongBan">Tên phòng ban: </label>
                                    <input type="text" name="inputTenPhongBan" id="inputTenPhongBan" class="form-control">
                                </div>
                                <div class="col-5">
                                    <label for="inputTruongPhong">Mã NV trưởng phòng: </label>
                                    <input type="text" name="inputTruongPhong" id="inputTruongPhong" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success" id="btnThemPhongBan" name="btnThemPhongBan">OK</button>
                            </div>
                        </form>
                    </div>
                    <div class="row div-phongban">
                        <table id="table-phongban" class="table table-striped">
                            <thead>
                                <tr class="d-flex">
                                    <th class="col-2">Mã PB</th>
                                    <th class="col-5">Tên phòng ban</th>
                                    <th class="col-3">Trưởng phòng</th>
                                    <th class="col-2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $row = $phongban->showPhongBan();
                                    foreach($row as $value)
                                    {
                                        ?>
                                        <tr class="d-flex">
                                            <td class="col-2"><?php echo $value['0']; $id=$value['0'];?></td>
                                            <td class="col-5"><?php echo $value['1']?></td>
                                            <td class="col-3"><?php echo $value['2']?></td>
                                            <td class="col-1">
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal<?php echo $value['0'];?>">Sửa</button>
                                            </td>
                                            <form action="" method="POST" onsubmit="return confirm('Bạn thật sự muốn xóa phòng ban này?');">
                                            <td class="col-1">
                                                <input type="text" name="mapb" value="<?php echo $value['0']; ?>" style="display:none;">  
                                                <button type="submit" class="btn btn-danger" name="btnXoaPhongBan">Xóa</button>
                                            </td>    
                                            </form>
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $value['0'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sửa phòng ban</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="POST" id="formSuaPhongBan">
                                                    <div class="modal-body">
                                                            <div class="row">
                                                                <input type="text" name="maphong" value="<?php echo $value['0'];?>" style="display:none;">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <label for="tenphongban">Tên phòng ban: </label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class="form-control" name="edittenphongban" id="tenphongban" value="<?php echo $value['1'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <label for="tentruongphong">Mã NV trưởng phòng: </label>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class="form-control" name="editmatruongphong" id="tentruongphong" value="<?php echo $value['2'];?>">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                        <input type="submit" class="btn btn-primary" name="btnSuaPhongBan" value="Lưu">
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- MODAL HERE -->
    <!-- MODAL SỬA THÔNG TIN PHÒNG BAN -->
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $(".div-themphongban").hide();
            $("#btnThemPB").click(function () {
                $(".div-themphongban").toggle(500);
            });
        });
    </script>
    </body>

</html>