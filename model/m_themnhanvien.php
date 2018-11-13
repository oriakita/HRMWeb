<?php
    include 'database.php';

    $manv = null;
    $hoten = null;
    $chucvu = null;
    $phongban = null;
    $diachi = null;
    $ngaysinh = null;
    $sdt = null;
    $password = null;

    if(isset($_POST['btnThemNV'])) {
        $hoten = $_POST['hoten'];
        $gioitinh = $_POST['gioitinh'];
        $chucvu = $_POST['chucvu'];
        $phongban = $_POST['phongban'];
        $diachi = $_POST['diachi'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $password = $_POST['password'];
        $file_name = $_FILES['loadimages']['name'];

        if($hoten == "" || $diachi == "" || $ngaysinh == "" || $sdt == "" || $password == "") {
            echo "Bạn vui lòng nhập đầy đủ thông tin";
        } else {
            $sql = "SELECT sdt FROM nhanvien WHERE nhanvien.sdt = '$sdt'";
            if (mysqli_num_rows(mysqli_query($conn,$sql)) > 0) {
                echo "SDT này đã có rồi";
            } else {
                $file_path = 'images/nhanvien/'.$file_name;
                move_uploaded_file($_FILES['loadimages']['tmp_name'],'images/nhanvien/'.$file_name);

                $sql = "INSERT INTO nhanvien(hoten, ngaysinh, gioitinh, diachi, sdt, macv, mapb, password, avatar) 
                        VALUES ('$hoten' , '$ngaysinh' , '$gioitinh' , '$diachi' , '$sdt' , '$chucvu' , '$phongban' , '$password' , '$file_path');";
                mysqli_query($conn,$sql);
                echo "Thành công";
              }
        }
      
    }
?>