<?php
    include("../controller/c_nhanvien.php");
    include("../controller/c_luong.php");
    $luong = new luong_controller();
    if(isset($_POST['btnTinhLuong']))
    {
        $manv = $_POST['manv'];
        $mathang = "112018";
        $luong->nhapLuong($manv,$mathang);
        
    }
    $nhanvien = new nhanvien_controller();
    $mapb = $_POST['id'];
    $row = $nhanvien->showNhanVienChamCong($mapb);
    foreach($row as $value)
    {
        ?>
            
                <tr class="d-flex">
                <form action="chamcong.php" method="POST">
                    <td class="col-1"><input type="text" class="form-control" name="manv" value="<?= $value['0']; ?>" readonly="readonly"></td>
                    <td class="col-3"><input type="text" class="form-control" name="hoten" value="<?= $value['1']; ?>" readonly="readonly"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['2']; ?>" name="ngaycong"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['3']; ?>" name="tangca"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['4']; ?>" name="vipham"></td>
                    <td class="col-1"><input type="number" class="input-number" value="<?= $value['5']; ?>" name="tongtien"></td>
                    <td class="col-1"><input type="submit" class="btn btn-primary" name="btnTinhLuong" value="OK"></td>
                </form>
                </tr>
        <?php
    }

?>