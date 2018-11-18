<?php
    include("../database/database.php");
    class truyvan extends database {

        var $row = null;
        public function queryLogin($username,$password) {
            $sql = "select * from nhanvien where sdt = '$username' and password = '$password' ";
            $this->setQuery($sql);
            return $this->countRows();
        }

        public function loadRowUser($sdt)
        {
            $sql = "select * from nhanvien where sdt = '$sdt' ";
            $this->setQuery($sql);
            $this->row = $this->loadOneRowArry();
        }
    }
?>