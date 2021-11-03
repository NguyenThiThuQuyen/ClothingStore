<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }

    // Lấy thông tin tài khoản nhân viên đang đăng nhập
    $nhanvien = mysqli_query($conn, "SELECT * FROM nhanvien nv join taikhoan tk on nv.id = tk.id");

    $sql_taikhoan="SELECT * FROM TaiKhoan ";
    $taikhoan = mysqli_query($conn,$sql_taikhoan);
    
    // Thêm thông tin nhân viên
    if(isset($_POST['submit'])){
        $HoTenNV = $_POST["HoTenNV"];
        $ChucVu = $_POST["ChucVu"];
        $DiaChi = $_POST['DiaChi'];
        $SoDienThoai = $_POST['SoDienThoai'];
        $taikhoan_id = $_POST['taikhoan_id'];
        $sql = "INSERT INTO NhanVien (HoTenNV , ChucVu, DiaChi, SoDienThoai, taikhoan_id) 
                    VALUES ('$HoTenNV ' , '$ChucVu' , '$DiaChi' , '$SoDienThoai', '$taikhoan_id')";
        if (mysqli_query($conn,$sql)) 
        {
            header('location: danhsach.php');
        } else {
        echo "Error updating record: " . $conn->error;
        }
        
        $connect->close();
        }
?>

<title>Thêm hàng hóa</title>
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
                    <h2 class="text-center mt-3">THÔNG TIN NHÂN VIÊN</h2>
                            <form class="mx-auto" action="" method="post"> 
                                    <h6 class="mt-2">Nhập thông tin:</h6>
                                        <div class="form-group row mt-5">
                                            <label for="HoTenNV" class="col-sm-2 col-form-label form_label">Họ tên</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="HoTenNV" id="HoTenNV">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="ChucVu" class="col-sm-2 col-form-label form_label">Chức vụ</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="ChucVu" id="ChucVu">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="DiaChi" class="col-sm-2 col-form-label form_label">Địa chỉ</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="DiaChi" id="DiaChi">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="SoDienThoai" class="col-sm-2 col-form-label form_label">Số điện thoại</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="SoDienThoai" id="SoDienThoai">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="" class="col-sm-2 col-form-label form_label">Tài khoản</label>                            
                                            <div class="col-sm-8">
                                            <select class="custom-select" name="taikhoan_id">
                                                <option selected>Chọn</option>
                                                <?php foreach($taikhoan as $key => $value) { ?>
                                                    <option value="<?php echo $value['taikhoan_id'] ?>"><?php echo $value['username'] ?></option>
                                                <?php } ?>

                                            </select>
                                            </div>
                                        </div>                            
                                    <div class="form-group row mt-3 float-right" style="margin-right: 150px">
                                        <div class="col-sm-8 d-flex">
                                            <button type="submit" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark mr-2 px-4" name="submit" id="submit">Lưu</button>
                                            <button type="button" class="btn btn-secondary px-4" data-dismiss="modal">Hủy</button>                                            
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