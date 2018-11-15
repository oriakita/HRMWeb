<?php
    include("../database/database.php");

    class truyvannhanvien extends database
    {
        var $row = null;
        var $num_rows = null;
        
        public function kiemTraSdt($sdt) {
            $sql = "SELECT manv FROM nhanvien WHERE sdt = '$sdt'; ";
            $this->setQuery($sql);
            return $this->countRows();
        }

        public function insertNhanVien($hoten, $ngaysinh, $gioitinh, $diachi, $sdt, $chucvu, $phongban, $password, $file_path)
        {
            $sql = "INSERT INTO nhanvien(hoten, ngaysinh, gioitinh, diachi, sdt, macv, mapb, password, avatar) 
                        VALUES ('$hoten' , '$ngaysinh' , '$gioitinh' , '$diachi' , '$sdt' , '$chucvu' , '$phongban' , '$password' , '$file_path');";
            $this->setQuery($sql);
            $this->runQuery();
        }

        public function selectNhanVien()
        {
            $sql = "SELECT * FROM `nhanvien`";
            $this->setQuery($sql);
            $this->row = $this->loadRowArray();
            $this->num_rows = $this->countRows();
        }

        public function selectOneNhanVien($manv)
        {
            $sql = "SELECT * FROM nhanvien WHERE manv = '$manv' ";
            $this->setQuery($sql);
            $this->row = $this->loadOneRowArry();
        }

        public function selectNhanVienChamCong($mapb)
        {
            $sql = "SELECT nhanvien.manv, nhanvien.hoten, luong.ngaycong, luong.tangca, luong.vipham, luong.tongtien FROM nhanvien,luong WHERE nhanvien.mapb = '$mapb' ";
            $this->setQuery($sql);
            $this->row = $this->loadRowArray();
            $this->num_rows = $this->countRows();
        }
    }
?>