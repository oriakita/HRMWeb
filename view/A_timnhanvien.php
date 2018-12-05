<?php
    include("../controller/c_nhanvien.php");
    $nhanvien = new nhanvien_controller();
    if(isset($_POST['tukhoa'])){
        $key_name = $_POST['tukhoa'];
        $row = $nhanvien->showNhanVienLikeKey($key_name);
    } 
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