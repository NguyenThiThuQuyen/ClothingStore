<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }

    if(isset($_GET['SoDonDH'])){
        $SoDonDH = $_GET['SoDonDH'];
        $chitiet=  mysqli_query($conn,"SELECT * FROM DatHang dh join  ChiTietDatHang ctdh on dh.SoDonDH = ctdh.SoDonDH join HangHoa hh on ctdh.MSHH = hh.MSHH WHERE ctdh.SoDonDH ='".$SoDonDH."' ");
    }

    if(isset($_POST['TrangThaiDH'])){
        $TrangThaiDH = $_POST['TrangThaiDH'];
        mysqli_query($conn, "UPDATE DatHang SET TrangThaiDH = '$TrangThaiDH' WHERE SoDonDH = $SoDonDH");
        header('location: lietke.php');
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
                            <a href="./them.php" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">Chi tiết đơn hàng</h2>
                    </div>
                    
                    <div class="col-12 mt-4">
                    <form action="" method="post">                          
                            <div class="form-group row mt-3 mx-auto">
                                <label for="" class="col-md-1 col-form-label form_label">Trạng thái</label>
                                <div class="col-sm-3">
                                <select class="form-control" id="input" name="TrangThaiDH" require="required" >
                                   <option value="0">Chưa xử lý</option>
                                   <option value="1">Đã xử lý</option>
                                   <option value="2">Đã giao hàng</option>
                                   <option value="3">Đã hoàn thành</option>
                                   <option value="4">Hủy đơn</option>
                                </select>                              
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form> 
  
                      <div class="container mt-5">
                                               
                        <table class="table table-bordered table-striped text-center mt-2">
                        <thead>
                        <tr>
                            <th>Số đơn đặt hàng</th>
                            <!-- <th>STT</th> -->
                            <th>Tên hàng hóa</th>
                            <th>Số lượng </th>
                            <th>Giá</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tạm tính</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($chitiet)){
                                $tonghoadon = 0;
                                // $key = 1; 
                            foreach ($chitiet as $key => $value) {  
                                              
                                $tonghoadon += $value['Gia']*$value['SoLuong'];
                                // $key+=1;
                        ?>
                            <tr>
                                <td><?php echo $value['SoDonDH'] ?></td>
                                <!-- <td><?php echo $key++ ?></td> -->
                                <td><?php echo $value['TenHH'] ?></td>
                                <td><?php echo $value['SoLuong'] ?></td>
                                <td><?php echo $value['Gia'] ?></td>
                                <td><?php echo $value['NgayDH'] ?></td>
                                <td ><?php echo $value['SoLuong'] * $value['Gia'] ?></td>
                            </tr>                          
                            <?php } } ?>
                            
                          </tbody>
                            <tr>
                                <td colspan="6">Tổng tiền: <?php echo $tonghoadon?></td>
                            </tr>
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