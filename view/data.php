<?php
    include("../controller/c_nhanvien.php");
    $nhanvien = new nhanvien_controller();
    $mapb = $_POST['id'];
    $row = $nhanvien->showNhanVienChamCong($mapb);
    foreach($row as $value)
    {
        ?>
            <form action="" method="POST">
                <tr class="d-flex">
                    <td class="col-1"><input type="text" class="form-control" name="manv" value="<?= $value['0']; ?>" readonly="readonly"></td>
                    <td class="col-3"><input type="text" class="form-control" name="manv" value="<?= $value['1']; ?>" readonly="readonly"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['2']; ?>" name="ngaycong"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['3']; ?>" name="tangca"></td>
                    <td class="col-2"><input type="number" class="input-number" value="<?= $value['4']; ?>" name="vipham"></td>
                    <td class="col-1"><input type="number" class="input-number" value="<?= $value['5']; ?>" name="tongtien"></td>
                    <td class="col-1"><input type="submit" class="btn btn-primary" name="btnTinhLuong" value="OK"></td>
                </tr>
            </form>
        <?php
    }

?>