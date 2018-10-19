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
                <img class="mx-auto d-block hrmlogo" width="auto" height="150px" src="images/hrmlogo.png" alt="Human Resource Management">
        </div>
        <div class="row">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Đăng nhập</h4>
                    </div>
                    <div class="card-body">
                        <form action="loginprocess.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Tài khoản</label>
                                <input type="text" class="form-control" id="" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" id="" placeholder="Password" name="password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox1">
                                <label for="" class="form-check-label">Nhớ tài khoản</label>
                                <label for="" class="forgotpass"><a href="#">Quên mật khẩu</a></label>       
                            </div>
                                <button class="btn btn-primary" type="submit" name="btn_submit">Đăng nhập</button>
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