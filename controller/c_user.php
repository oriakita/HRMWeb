<?php
    include("../model/m_user.php");

    class user_action 
    {
        var $thongbao = null;

        public function login($username,$password) 
        {
            
            if ($username == "" || $password =="") {
                $this->thongbao = "Username hoặc Password bạn không được để trống!";
            }else{
                $truyvan = new truyvan();
                if ($truyvan->queryLogin($username,$password)===0) {
                    $this->thongbao= "Tên đăng nhập hoặc mật khẩu không đúng !";
                }else{
    
                    session_start();
                    $_SESSION['username'] = $username;
                    header('location: ./home.php');
                }
            }
            
        }

        public function logout()
        {   
            session_start();
            session_destroy();
            header("location:login.php");
        }

        public function getRoleUser($sdt)
        {
            $truyvan = new truyvan();
            $truyvan->loadRowUser($sdt);
            return $truyvan->row;
        }
    }
?>