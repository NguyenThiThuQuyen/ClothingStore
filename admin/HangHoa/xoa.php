
<?php
    include ('../config/config.php');
    if(isset($_REQUEST['MSHH']) and $_REQUEST['MSHH']!=""){
        $MSHH=$_GET['MSHH'];
        $sql = "DELETE FROM hanghoa WHERE MSHH='$MSHH'";
    if ($conn->query($sql) === TRUE) {
        header('location: danhsach.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $connect->close();
    }
?>