
        <!--NAVBAR ADMIN-->
        <nav class="navbar navbar-expand-md navbar-light bg-primary">
            <a class="navbar-brand" href="home.php"><img src="images/logobar.png" width="100" height="40"></a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item username">
                        <a class="nav-link" href="#">Xin chào <?php echo $_SESSION['username'];?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="inluong.php">In lương</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Nhân viên</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="timnhanvien.php">Tìm nhân viên</a>
                            <a class="dropdown-item" href="themnhanvien.php">Thêm nhân viên</a>
                            <a class="dropdown-item" href="chamcong.php">Chấm công</a>
                            <a class="dropdown-item" href="thanhtich.php">Đánh giá thành tích</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quanliphongban.php">Phòng Ban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tuyendung.php">Tuyển Dụng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qltintuc.php">QL Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Đăng xuất</a>
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm mọi thứ?...">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!--END NAVBAR ADMIN-->
 


