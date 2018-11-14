<?php
    include("../database/database.php");

    class truyvanphongban extends database 
    {
        var $row = null;
        var $num_rows = null;

        public function insertPhongBan($mapb,$tenphongban,$trphong) 
        {   
            if($trphong == "") 
            {
                $sql = "INSERT INTO phongban(MAPB,TenPB,trphg) VALUES ('$mapb' , '$tenphongban' , null);";
            }
            else
            {
                $sql = "INSERT INTO phongban(MAPB,TenPB,trphg) VALUES ('$mapb' , '$tenphongban' , '$trphong');";
            }
            $this->setQuery($sql);
            $this->runQuery();
        }

        public function daco($tenphongban,$trphong) {
            $sql1 = "SELECT mapb FROM phongban WHERE TenPB = '$tenphongban'; ";
            $sql2 = "SELECT mapb FROM phongban WHERE trphong = '$trphong'; ";
            $this->setQuery($sql1);
            return $this->countRows();
        }

        public function selectAll() {
            $sql = "SELECT * FROM `phongban`";
            $this->setQuery($sql);
            $this->row = $this->loadRowArray();
            $this->num_rows = $this->countRows();
        }
    }
?>