<?php
    session_start();
    if (!isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['tendangnhap']);
        header("location: ../Khachhang/dangnhap.php");
    }

?>