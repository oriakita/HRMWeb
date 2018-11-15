<?php
    include("../database/database.php");
    class truyvanungvien extends database
    {
        var $row = null;
        var $num_rows = null;

        public function insertUngVien($hoten, $ngaysinh, $cmnd, $gioitinh, $diachi, $sdt, $email, $trinhdohv, $vitriungvien)
        {
            $sql = "INSERT INTO ungvien(hoten , ngaysinh , cmnd , gioitinh , diachi , sdt , email , trinhdohv , vitriungvien )
                    VALUES ('$hoten' , '$ngaysinh' , '$cmnd' , '$gioitinh' , '$diachi' , '$sdt' , '$email' , '$trinhdohv' , '$vitriungvien'); ";
            $this->setQuery($sql);
            $this->runQuery();        
        }

        public function selectUngVien() 
        {
            $sql = "SELECT * FROM `ungvien`";
            $this->setQuery($sql);
            $this->row = $this->loadRowArray();
            $this->num_rows = $this->countRows();
        }

        public function selectOneUngVien($mauv)
        {
            $sql = "SELECT * FROM ungvien WHERE mauv = '$mauv' ";
            $this->setQuery($sql);
            $this->row = $this->loadOneRowArry();
        }

        public function deleteUngVien($mauv)
        {
            $sql = "DELETE FROM ungvien WHERE mauv = '$mauv'; ";
            $this->setQuery($sql);
            $this->runQuery();
        }
    }
?>