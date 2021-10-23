<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../../dangnhap.php');
    }
?>

<?php
    include '../config/config.php';
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa hhh join HangHoa ma on hhh.MSHH = ma.MSHH");

?>

    <title>Hình hàng hóa</title>

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
                        <h2 class="text-center mt-5">QUẢN LÝ HÌNH HÀNG HÓA</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th>MSHH</th> -->
                              <th>Tên hình</th>
                              <th>Hình ảnh</th>
                              <th>Tên hành hóa</th>
                              <th>Điều chỉnh</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                          
                          <?php if (($hinhhanghoa)) {?>
                            <?php foreach ($hinhhanghoa as $key => $value) {?>
                            <tr>
                              <td><?php echo $value['TenHinh'] ?></td>
                              <td><img src="../../upload/<?php echo $value["Hinh"] ?>" alt="" height="90" weight="85"></td>
                              <td><?php echo $value['TenHH'] ?></td>
                              <td>
                                <a href="xem.php?MaHinh=<?php echo $value['MaHinh'] ?>" title="Xem" class="btn btn-white"><i class="far fa-eye"></i></a>                                
                                <a href="sua.php?MaHinh=<?php echo $value['MaHinh'] ?>" title="Sửa" class="btn btn-white"><i class="fas fa-pen mr-3"></i></a>                                
                                <a href="xoa.php?MaHinh=<?php echo $value['MaHinh'] ?>" title="Xóa" class="btn btn-white"><i class="fas fa-trash-alt"></i></a>                            
                              </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>

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