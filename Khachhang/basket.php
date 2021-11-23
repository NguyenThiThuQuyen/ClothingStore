<?php
    include '../admin/config/config.php'; 
    $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa");
    $hanghoa = mysqli_query($conn, "SELECT * FROM hanghoa");
    session_start();
    if (!isset($_SESSION['tendangnhap'])) {
        header("location: ./dangnhap.php");
    } 
    // session_destroy();
    // die;
    if(isset($_GET['MSHH'])){
        $MSHH = $_GET['MSHH'];
    }

    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    $SoLuong = (isset($_GET['SoLuong'])) ? $_GET['SoLuong'] : 1;
    // var_dump($_GET);
    // die();
    $query = mysqli_query($conn, "SELECT * FROM hanghoa WHERE MSHH = $MSHH" );

    if($query){
        $hanghoa = mysqli_fetch_assoc($query);
    }
    $item = [
        'MSHH' => $hanghoa['MSHH'],
        'TenHH' => $hanghoa['TenHH'],
        'Hinh' => $hanghoa['Hinh'],
        'Gia' => ($hanghoa['Gia'] > 0) ? $hanghoa['GiaKM'] : $hanghoa['Gia'],
        'SoLuong' => $SoLuong
    ];

    if($action == 'add'){
        if(isset($_SESSION['cart'][$MSHH])){
            $_SESSION['cart'][$MSHH]['SoLuong'] += $SoLuong;
        }
        else{
            $_SESSION['cart'][$MSHH] = $item;
        }
    }
    if($action == 'update'){
        $_SESSION['cart'][$MSHH]['SoLuong'] = $SoLuong;
    }
    if($action == 'delete'){
       unset($_SESSION['cart'][$MSHH]);
    }


    header('location: view-basket.php');
    // echo"<pre>";
    // print_r($_SESSION['cart']);

?>

