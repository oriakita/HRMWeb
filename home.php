<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('location: ./login.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website quản lý nhân sự</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-primary">
        <a class="navbar-brand" href="home.html"><img src="images/logobar.png" width="100" height="40"></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="inluong.html">In lương</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Nhân viên</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="timnhanvien.html">Tìm nhân viên</a>
                        <a class="dropdown-item" href="themnhanvien.html">Thêm nhân viên</a>
                        <a class="dropdown-item" href="chamcong.html">Chấm công</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quanliphongban.html">Phòng Ban</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tuyendung.html">Tuyển Dụng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Đăng xuất</a>
                </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm mọi thứ?...">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="images/slide1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/slide2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="images/slide3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="card w-100 mybirthdayboard">
                        <h6 class="card-header mybirthdayboard">Sinh nhật trong tháng</h6>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <img src="images/avatar-men.png" alt="this is avatar">
                                <a href="#">Nguyễn Văn A - 01/10/1990</a>
                            </li>
                            <li class="list-group-item">
                                <img src="images/avatar-female.png" alt="this is avatar">
                                <a href="#">Ngô Thị B - 23/10/1990</a>
                            </li>
                            <li class="list-group-item">
                                <img src="images/avatar-men.png" alt="this is avatar">
                                <a href="#">Nguyễn Hồ Tấn C - 29/10/1995</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="card mybulletinboard">
                        <h5 class="card-header">
                            Thông báo
                            <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                        </h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6 class="card-title">Lịch nghỉ lễ ngày tết <span class="badge badge-danger">news</span></h6>
                                <p class="card-text myfont">Công ty quyết định lịch nghỉ 2 ngày lễ dành cho toàn nhân
                                    viên của công ty</p>
                                <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                            </li>
                            <li class="list-group-item">
                                <h6 class="card-title">Danh sách tăng lương tháng 10 <span class="badge badge-warning">happy</span></h6>
                                <p class="card-text myfont">Nhưng danh viên có thành tích làm việc xuất sắc sẽ được
                                    tăng lương</p>
                                <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                            </li>
                            <li class="list-group-item">
                                <h6 class="card-title">Doanh số công khai tháng 10 <span class="badge badge-danger">news</span></h6>
                                <p class="card-text myfont">Doanh số công ty tăng trưởng ổn định, quyết định bổ sung
                                    theo kế hoạch mới.</p>
                                <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mymessage">
                    <h5 class="card-header">
                        Tuyển dụng và đào tạo
                    </h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6 class="card-title">Bổ sung vị trí bán hàng <span class="badge badge-success">news</span></h6>
                            <p class="card-text myfont">Vị trí bán hàng cửa hàng chi nhánh 150 Lê Lợi, Quận 3, TP.HCM</p>
                            <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="card-title">Danh sách nhân viên mới <span class="badge badge-success">news</span></h6>
                            <p class="card-text myfont">Cập nhật những vị trí mới bổ sung nhân viên 5 tháng 10</p>
                            <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                        </li>
                        <li class="list-group-item">
                            <h6 class="card-title">Đào tạo cùng hãng Sony <span class="badge badge-success">news</span></h6>
                            <p class="card-text myfont">Sáng ngày 7 tháng 10 cần 3 nhân viên bán hàng tranning sản phẩm mới</p>
                            <a href="#" class="btn btn-primary myfont">Xem thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>