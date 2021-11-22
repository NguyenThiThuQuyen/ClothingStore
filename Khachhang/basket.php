
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
    // $soluong = (isset($_GET['soluong'])) ? $_GET['soluong'] : 1;
    // if($soluong <= 0){
    //     $soluong = 1;
    // }
    $query = mysqli_query($conn, "SELECT * FROM hanghoa WHERE MSHH = $MSHH" );
    if($query){
        $hanghoa = mysqli_fetch_assoc($query);
    }
    $item = [
        'MSHH' => $hanghoa['MSHH'],
        'TenHH' => $hanghoa['TenHH'],
        'Gia' => $hanghoa['Gia'],
        'SoLuong' => 1
    ];

    if(isset($_SESSION['cart'][$MSHH])){
        $_SESSION['cart'][$MSHH]['SoLuong'] +=1;
    }
    else{
        $_SESSION['cart'][$MSHH] = $item;
    }

?>

