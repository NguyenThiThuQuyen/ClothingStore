<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }
?>
<?php
    include '../config/config.php';
    if(isset($_GET['MaLoaiHang'])){
        $MaLoaiHang = $_GET['MaLoaiHang'];
    }
    $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa WHERE MaLoaiHang=$MaLoaiHang");

?>

    <title>Xem loại hàng hóa</title>

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
                        <h2 class="text-center mt-5">XEM LOẠI HÀNG HÓA</h2>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th>Mã loại hàng</th>
                              <th>Tên loại hàng</th>                            
                            </tr>
                        </thead>
                        <tbody>                        
                            <?php foreach ($loaihanghoa as $key => $value) {?>
                            <tr>
                              <td><?php echo $value['MaLoaiHang'] ?></td>
                              <td><?php echo $value['TenLoaiHang'] ?></td>                              
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        <div class="my-5">
                                    <button type="button" class="btn btn-secondary px-4" data-dismiss="modal"><a href="./danhsach.php" style="text-decoration: none; color:white">Trở về</a></button>
                                   
                                    </div>
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