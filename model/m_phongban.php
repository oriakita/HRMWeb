<?php
    include("../database/database.php");

    class truyvanphongban extends database 
    {
        var $row = null;
        var $num_rows = null;

        public function insertPhongBan($mapb, $tenphongban, $trphong) 
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

        public function daCoPhongBan($tenphongban) {
            $sql1 = "SELECT mapb FROM phongban WHERE TenPB = '$tenphongban'; ";
            $this->setQuery($sql1);
            return $this->countRows();
        }

        public function daCoTruongPhong($trphong) {
            $sql2 = "SELECT mapb FROM phongban WHERE trphg = '$trphong'; ";
            $this->setQuery($sql2);
            return $this->countRows();
        }

        public function selectAll() {
            $sql = "SELECT * FROM `phongban`";
            $this->setQuery($sql);
            $this->row = $this->loadRowArray();
            $this->num_rows = $this->countRows();
        }

        public function updatePhongBan($mapb, $tenpb, $trphong)
        {
            if($trphong == "") 
            {
                $sql = "UPDATE phongban SET TenPB = '$tenpb' , trphg = null WHERE MAPB = '$mapb'; ";
            }
            else
            {
                $sql = "UPDATE phongban SET TenPB = '$tenpb' , trphg = '$trphong' WHERE MAPB = '$mapb'; ";
            }
            $this->setQuery($sql);
            $this->runQuery();
        }

        public function deletePhongBan($mapb)
        {
            $sql = "DELETE FROM phongban WHERE MAPB = '$mapb'; ";
            $this->setQuery($sql);
            $this->runQuery();
        }
    }
?>