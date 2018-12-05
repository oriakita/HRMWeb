<?php
    include("../model/m_nhanvien.php");

    class nhanvien_controller
    {
        var $thongbao = "";
        var $num_rows = null;
        public function themNhanVien($hoten, $gioitinh, $chucvu, $phongban, $diachi, $ngaysinh, $sdt, $password, $file_name, $file_tmpname)
        {
            if($hoten == "" || $diachi == "" || $ngaysinh == "" || $sdt == "" || $password == "")
            {
                $this->thongbao = "Bạn vui lòng nhập đầy đủ thông tin";
            }
            else
            {
                $truyvan = new truyvannhanvien();
                if($truyvan->kiemTraSdt($sdt)===0)
                {
                    $file_path = 'images/nhanvien/'.$file_name;
                    move_uploaded_file($file_tmpname,$file_path);
                    $truyvan->insertNhanVien($hoten, $ngaysinh, $gioitinh, $diachi, $sdt, $chucvu, $phongban, $password, $file_path);
                    $this->thongbao = "Thêm nhân viên thành công";
                }
                else
                {
                    $this->thongbao = "Đã tồn tại số điện thoại này rồi.";
                }
            }
        }

        public function showNhanVien()
        {
            $truyvan = new truyvannhanvien();
            $truyvan->selectNhanVien();
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }

        public function showInfoNhanVien($manv)
        {
            $truyvan = new truyvannhanvien();
            $truyvan->selectOneNhanVien($manv);
            return $truyvan->row;
        }

        public function showNhanVienChamCong()
        {
            $truyvan = new truyvannhanvien();
            $truyvan->selectNhanVienChamCong();
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }
    }
?>