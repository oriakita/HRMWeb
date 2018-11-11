<?php
    $host = 'localhost';
    $userdb = 'root';
    $passworddb = '';
    $database = 'hrm_db';
    $conn = mysqli_connect($host,$userdb,$passworddb,$database) or die ('Cannot connect to server');
    mysqli_query($conn,"SET NAME 'UTF8'");
?>