<?php

    include '../../admin/config/config.php';
    session_start();
    if(isset($_REQUEST['MSHH']) and $_REQUEST['MSHH']!=""){
        $MHH=$_GET['MSHH'];
        unset($_SESSION['cart'][$MSHH]);
        header("location: ./basket.php");
    }

?>