<?php
    $host = 'localhost';
    $userdb = 'root';
    $passworddb = '';
    $database = 'hrm_web';
    $conn = mysqli_connect($host,$userdb,$passworddb,$database) or die ('Cannot connect to server');
    mysqli_query($conn,"SET NAME 'UTF8'");
    mysqli_set_charset($conn,"utf8");
?>