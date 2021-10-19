<?php
    include ('../config/config.php');

    if(isset($_REQUEST['MaLoaiHang']) and $_REQUEST['MaLoaiHang']!=""){
        $MaLoaiHang=$_GET['MaLoaiHang'];
        $sql = "DELETE FROM LoaiHangHoa WHERE MaLoaiHang='$MaLoaiHang'";
    if ($conn->query($sql) === TRUE) {
        header('location: danhsach.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
        $connect->close();
    }
?>
