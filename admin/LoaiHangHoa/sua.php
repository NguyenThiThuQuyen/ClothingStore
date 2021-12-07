<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }
?>
<?php
    include '../config/config.php';
    // $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");

    if(isset($_GET['MaLoaiHang'])){
        $MaLoaiHang = $_GET['MaLoaiHang'];
        $data = mysqli_query($conn,"SELECT * FROM loaihanghoa WHERE MaLoaiHang = $MaLoaiHang ");
        $lhh = mysqli_fetch_assoc($data);
    }

    if(isset($_POST['TenLoaiHang'])){
        $TenLoaiHang = $_POST["TenLoaiHang"];
        $sql = "UPDATE loaihanghoa SET TenLoaiHang = '$TenLoaiHang' WHERE MaLoaiHang = $MaLoaiHang";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: danhsach.php');
        }
        else{
            echo "Lỗi";
        }
      }
?>

    <title>Sửa loại hàng hóa</title>
<style>
    button#submit {
        background-color: rgb(226, 169, 143);
    }
</style>
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
                    <div class="col-1"></div>
                    <div class="col-9 mt-3"> 
                    <h2 class="text-center mt-3">SỬA LOẠI HÀNG HÓA</h2>                   
                            <form action="" method="post"> 
                                    <h5>Nhập thông tin:</h5>
                                        <div class="form-group row mt-5">
                                            <label for="TenLoaiHang" class="col-sm-2 col-form-label form_label">Tên loại</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="TenLoaiHang" id="TenLoaiHang" value="<?php echo $lhh['TenLoaiHang'] ?>">
                                            </div>
                                        </div>                                
                                    <!-- <div class="form-group row mt-3 float-right" style="margin-right: 150px">
                                        <div class="col-sm-8 d-flex">
                                            <button type="submit" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark mr-2 px-4" name="submit" id="submit">Lưu</button>
                                            <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Hủy</button>                                            
                                        </div>
                                    </div> -->
                                    <div class="my-5">
                                    <button type="button" class="btn btn-secondary px-4" data-dismiss="modal"><a href="./danhsach.php" style="text-decoration: none; color:white">Trở về</a></button>
                                    <div class=" form-group row float-right" style="margin-right: 130px">
                                        <div class="col-sm-8 d-flex">
                                            <button type="submit" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark mr-2 px-4" name="submit" id="submit"><b>Lưu</b></button>                                               
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </form>                      
                    </div>              
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>