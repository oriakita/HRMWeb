<?php
    include("../database/database.php");
    class truyvan extends database {

        public function queryLogin($username,$password) {
            $sql = "select * from nhanvien where sdt = '$username' and password = '$password' ";
            $this->setQuery($sql);
            return $this->countRows();
        }
    }
?>