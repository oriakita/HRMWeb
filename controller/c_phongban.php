<?php
    include("../model/m_phongban.php");

    class phongban_controller 
    {
        var $thongbao = "";
        var $error = "";
        var $success = "";
        var $num_rows = null;
        public function themPhongBan($mapb, $tenpb, $truongphong) 
        {
            if($tenpb == "") 
            {
                $this->thongbao = "Tên phòng ban không được để trống";
                $this->error = $this->thongbao;
            } 
            else 
            {
                $truyvan = new truyvanphongban();
                if($truyvan->daCoPhongBan($tenpb) > 0) 
                {
                    $this->thongbao = "Đã tồn tại phòng ban '$tenpb' này. Thêm thất bại! (T_T) ";
                    $this->error = $this->thongbao;
                    
                }
                else 
                {
                    if($truyvan->daCoTruongPhong($truongphong) > 0) 
                    {
                        $this->thongbao ="Mã NV $truongphong đã là trưởng phòng. Thêm thất bại! (T_T) ";
                        $this->error = $this->thongbao;
                    }
                    else 
                    {
                        $truyvan->insertPhongBan($mapb, $tenpb, $truongphong);
                        $this->thongbao = "Thêm phòng ban thành công (^_^)!";
                        $this->success = $this->thongbao;
                    }
                }
            }
        }

        public function showMessage()
        {
            if($this->thongbao == $this->error && $this->thongbao != "")
            {
                ?>
                <div class="alert alert-danger" role="alert">
                <?php echo $this->thongbao;?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <?php
            }
            else
            {
                if($this->thongbao == $this->success && $this->thongbao != "")
                {
                    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo $this->thongbao;?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php
                }
                else 
                {

                }
            }
            
        }

        public function showPhongBan() 
        {
            $truyvan = new truyvanphongban();
            $truyvan->selectAll();
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }

        public function suaPhongBan($mapb, $tenpb, $truongphong)
        {
            if($tenpb == "") 
            {
                $this->thongbao = "Tên phòng ban không được để trống!!!";
                $this->error = $this->thongbao;
            } 
            else
            {
                $truyvan = new truyvanphongban();
                if($truyvan->daCoPhongBan($mapb)===0 && $truyvan->daCoTruongPhong($truongphong)===0) 
                {
                    $truyvan->updatePhongBan($mapb, $tenpb, $truongphong);
                    $this->thongbao = "Sửa phòng ban thành công (^_^)";
                    $this->success = $this->thongbao;
                }
                else
                {
                    $this->thongbao = "Đã tồn tại phòng ban hoặc trưởng phòng này. Sửa thất bại! (T_T) ";
                    $this->error = $this->thongbao;
                }
            }
        }

        public function xoaPhongBan($mapb)
        {
            $truyvan = new truyvanphongban();
            $truyvan->deletePhongBan($mapb);
        }

        public function showNhanVienChamCong()
        {
            $truyvan = new truyvanphongban();
            $truyvan->selectNhanVienChamCong();
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }

        public function showOneNhanVienChamCong($manv) {
            $truyvan = new truyvanphongban();
            $truyvan->selectOneNhanVienChamCong($manv);
            $this->num_rows = $truyvan->num_rows;
            return $truyvan->row;
        }

        public function nhapLuong($manv, $mathang, $ngaycong, $tangca, $vipham)
        {
            $truyvan = new truyvanphongban();
            $truyvan->themLuongNhanVien($manv, $mathang, $ngaycong, $tangca, $vipham);
        }
    }
?>