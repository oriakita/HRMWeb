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
                if($truyvan->daco($tenpb, $truongphong)===0) 
                {
                    $truyvan->insertPhongBan($mapb, $tenpb, $truongphong);
                    $this->thongbao = "Thêm phòng ban thành công";
                    $this->success = $this->thongbao;
                }
                else
                {
                    $this->thongbao = "Trùng đã tồn tại phòng ban hoặc trưởng phòng này. Thêm thất bại!";
                    $this->error = $this->thongbao;
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
    }
?>