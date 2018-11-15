<?php
    include("../model/m_tuyendung.php");
    class tuyendung_controller
    {
        var $num_rows = null;
        public function themUngVien($hoten, $ngaysinh, $cmnd, $gioitinh, $diachi, $sdt, $email, $trinhdohv, $vitriungvien)
        {
            $truyvan = new truyvanungvien();
            $truyvan->insertUngVien($hoten, $ngaysinh, $cmnd, $gioitinh, $diachi, $sdt, $email, $trinhdohv, $vitriungvien);
            header("location:dangkythanhcong.php");
        }

        public function showUngVien()
        {
            $truyvan = new truyvanungvien();
            $truyvan->selectUngVien();
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }

        public function showInfoUngVien($mauv)
        {
            $truyvan = new truyvanungvien();
            $truyvan->selectOneUngVien($mauv);
            return $truyvan->row;
        }

        public function xoaUngVien($mauv)
        {
            $truyvan = new truyvanungvien();
            $truyvan->deleteUngVien($mauv);
        }
    }
?>