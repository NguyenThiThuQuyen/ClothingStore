<?php
    include ('../config/config.php');
    if(isset($_REQUEST['MaHinh']) and $_REQUEST['MaHinh']!=""){
        $MaHinh=$_GET['MaHinh'];
        $sql = "DELETE FROM hinhhanghoa WHERE MaHinh='$MaHinh'";
    if ($conn->query($sql) === TRUE) {
        header('location: danhsach.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $connect->close();
    }
?>