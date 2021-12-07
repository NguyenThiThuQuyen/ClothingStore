<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }

    $lietke =  mysqli_query($conn,"SELECT * FROM  KhachHang kh join DatHang dh on dh.MSKH = kh.MSKH join DiaChi dc on dc.MaDC = dh.MaDC ");
    $trangthai = mysqli_query($conn, "SELECT * FROM trangthaidonhang");

    if(isset($_GET['TrangThaiDH']) && isset($_GET['SoDonDH']) && isset($_POST['submit'])){
        // var_dump($_POST);
        $trangthaidonhang = $_GET['TrangThaiDH'];           
        $sodondh = $_GET['SoDonDH'];               
        $query = mysqli_query($conn, "UPDATE dathang SET TrangThaiDH = 1 where SoDonDH = '".$sodondh."' ");
        header("location: lietke.php");
    }

?>


<title>Hàng hóa</title>
<?php
    include('../layout/header.php');
?>  

    <div class="container-fluid p-0">
        <div class="row mr-0">
            <div class="col-2">         
                <div class="card-body p-0">
                    <div class="card" style="height:640px">
                        <?php
                            include('../layout/menu.php');
                        ?>                     
                    </div>  
                </div>                               
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                           
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">ĐƠN HÀNG</h2>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="container">
                                         
                        <table class="table table-bordered table-striped text-center mt-2">
                        <thead>
                        <tr>
                            <th>Số đơn đặt hàng</th>
                            <th>Tên khách hàng </th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($lietke)){
                            foreach ($lietke as $key => $value) {
                                
                            ?>
                            <tr>
                            <td><?php echo $value['SoDonDH'] ?></td>
                            <td><?php echo $value['HoTenKH'] ?></td>
                            <td><?php echo $value['DiaChi'] ?></td>
                            <td><?php echo $value['SoDienThoai'] ?></td>

                            <td>
                            <?php if($value['TrangThaiDH'] == 0) { ?>
                                <span class="label bg-danger">Chưa xử lý</span>
                            <?php } elseif($value['TrangThaiDH'] == 1) { ?>
                                <span class="label bg-warning">Đã xử lý</span>
                            <?php } elseif($value['TrangThaiDH'] == 2) { ?>
                                <span class="label bg-primary">Đã giao</span>
                            <?php } elseif($value['TrangThaiDH'] == 3) { ?>
                                <span class="label bg-success">Đã hoàn thành</span>
                            <?php } elseif($value['TrangThaiDH'] == 4) { ?>
                                <span class="label bg-secondary">Hủy đơn</span>
                                <?php } ?>
                            </td>
                            <td>
                            <button class="btn btn-outline-primary"><a href="xem.php?SoDonDH=<?php echo $value['SoDonDH'] ?>" title="Xem" class="btn btn-white">Xem chi tiết</a></button>

                            </td>
                            </tr>
                            <?php } } ?>
                          </tbody>
                        </table>
                    
                      </div>              
                    </div>
                </div>
            </div>
        </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>