<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }
?>

<?php
    include '../config/config.php';
    if(isset($_GET['MaHinh'])){
        $MaHinh = $_GET['MaHinh'];
    }
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa hhh join HangHoa ma on hhh.MSHH = ma.MSHH WHERE MaHinh=$MaHinh");

?>

    <title>Xem hình hàng hóa</title>
 
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
                        <h2 class="text-center mt-5">XEM THÔNG TIN HÌNH</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th>MaHinh</th>
                              <th>Tên hình</th>
                              <th>Hình ảnh</th>
                              <th>Tên hành hóa</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                          
                          <?php if (($hinhhanghoa)) {?>
                            <?php foreach ($hinhhanghoa as $key => $value) {?>
                            <tr>
                              <td><?php echo $value['MaHinh'] ?></td>
                              <td><?php echo $value['TenHinh'] ?></td>
                              <td><img src="../../upload/<?php echo $value["Hinh"] ?>" alt="" height="90" weight="85"></td>
                              <td><?php echo $value['TenHH'] ?></td>
        
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