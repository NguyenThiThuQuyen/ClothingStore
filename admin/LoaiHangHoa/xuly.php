<?php
include('../config/config.php');

    
    // if(isset($_POST['button'])){
    //     $tenloai = $_POST['TenLoaiHang'];
    //     $sql_them = "INSERT INTO loaihanghoa(TenLoaiHang) VALUE('$tenloai')";
    //     mysqli_query($conn, $sql_them);
    //     // header('Location:index.php');
    // }

    if(isset($_POST['submit'])){
        $TenLoaiHang = $_POST["TenLoaiHang"];
        $sql = "INSERT INTO LoaiHangHoa(TenLoaiHang) VALUES ( '$TenLoaiHang')";
        $conn->query($sql);
        $conn->close();
      }
?>