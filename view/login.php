<?php
    session_start();
    include("../controller/user_action.php");
    $user = new user_action();
    if (isset($_POST["btn_submit"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user->login($username,$password);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website quản lý nhân sự</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Đăng nhập</h4>
                    </div>
                    <div class="card-body">
                    <img class="mx-auto d-block hrmlogo" width="auto" height="150px" src="images/hrmlogo.png" alt="Human Resource Management">
                        <form id="myform" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Tài khoản</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox1">
                                <label for="" class="form-check-label">Nhớ tài khoản</label>
                                <label for="" class="forgotpass"><a href="#">Quên mật khẩu</a></label>       
                            </div>

                        
                                <span class="thongbao">
                                    <?php echo $user->thongbao;?>
                                </span>
                            

                            <input type="submit" value="Đăng nhập" id="btnsubmit" class="btn btn-primary" name="btn_submit">
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>