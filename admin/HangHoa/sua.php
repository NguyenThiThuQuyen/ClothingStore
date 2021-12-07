<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }
?>

<?php
    include '../config/config.php';
    $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");
    $hanghoa = mysqli_query($conn, "SELECT * FROM HangHoa hh join LoaiHangHoa loai on hh.MaLoaiHang = loai.MaLoaiHang");

    if(isset($_GET['MSHH'])){
        $MSHH = $_GET['MSHH'];
        $data = mysqli_query($conn,"SELECT * FROM hanghoa WHERE MSHH = $MSHH ");
        $hh = mysqli_fetch_assoc($data);
        //lấy ảnh mô tả ở bảng hinhhanghoa
        $hinhhanghoa = mysqli_query($conn,"SELECT * FROM hinhhanghoa WHERE MSHH = $MSHH ");
        // var_dump($hinhhanghoa);
    }

    if(isset($_POST['TenHH'])){
        $TenHH = $_POST["TenHH"];
        $QuyCach = $_POST["QuyCach"];
        $Gia = $_POST["Gia"];
        $GiaKM = $_POST["GiaKM"];
        $Hinh = $_FILES["Hinh"];
        $SoLuongHang = $_POST["SoLuongHang"];
        $MaLoaiHang = $_POST["MaLoaiHang"];
        $MoTa = $_POST["MoTa"];

        // echo '<pre>';
        // print_r($_FILES);
        // die();
        if(isset($_FILES['Hinh'])){
            $file = $_FILES['Hinh'];
            $file_name = $file['name'];
            //chọn ko thay đổi ảnh
            if(empty($file_name)){
                $file_name = $hh['Hinh'];
            }
            //có chọn thay đổi ảnh
            else{
                if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png'){
                    move_uploaded_file($file['tmp_name'], '../../upload/'.$file_name);
                }else{
                    echo "Lỗi";
                    $file_name = '';
                }
            }
        }
            

        if(isset($_FILES['Hinhs'])){
            $files = $_FILES['Hinhs'];
            $file_names = $files['name'];
            if(!empty($file_names[0])){
                mysqli_query($conn, "DELETE FROM hinhhanghoa WHERE MSHH = $MSHH");
                foreach($file_names as $key => $value){
                    move_uploaded_file($files['tmp_name'][$key], '../../upload/'.$value);
                }
                foreach($file_names as $key => $value){
                    mysqli_query($conn, "INSERT INTO HinhHangHoa(MSHH, Hinh) VALUES ('$MSHH', '$value')");
                }
            }
            
        }
        $sql = "UPDATE hanghoa SET TenHH = '$TenHH', QuyCach = '$QuyCach', Gia = '$Gia',
                  GiaKM = '$GiaKM',  Hinh = '$file_name', SoLuongHang = '$SoLuongHang', MoTa = '$MoTa'
                 WHERE MSHH = $MSHH";

        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: danhsach.php');
        }
        else{
            echo "Lỗi";
        }
      }

?>


    <title>Sửa hàng hóa</title>
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
                    <div class="col-12 mt-3">
                        <h3 class="text-center mt-5">SỬA THÔNG TIN HÀNG HÓA</h3>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-9 mt-4">
                      <div class="container"> 
                            <form class="mx-auto" action="" method="post" enctype="multipart/form-data"> 
                                        <div class="form-group row mt-5">
                                            <label for="TenHH" class="col-sm-2 col-form-label form_label">Tên hàng hóa</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="TenHH" id="TenHH" value="<?php echo $hh['TenHH'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="QuyCach" class="col-sm-2 col-form-label form_label">Quy cách</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="QuyCach" id="QuyCach" value="<?php echo $hh['QuyCach'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Gia" class="col-sm-2 col-form-label form_label">Giá</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="Gia" id="Gia" value="<?php echo $hh['Gia'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="GiaKM" class="col-sm-2 col-form-label form_label">Giá khuyến mãi</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="GiaKM" id="GiaKM" value="<?php echo $hh['GiaKM'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Hinh" class="col-sm-2 col-form-label form_label">Ảnh</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="Hinh" id="Hinh">
                                                <img src="../../upload/<?php echo $hh['Hinh'] ?>" alt="" width="150">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="Hinh" class="col-sm-2 col-form-label form_label">Ảnh mô tả</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="Hinhs[]" id="Hinh" multiple="multiple">
                                                <div class="row">
                                                    <?php if($hinhhanghoa) {  ?>
                                                     <?php foreach ($hinhhanghoa as $key => $value) { ?>
                                                        <div class="col-md-4">
                                                            <a href="">
                                                                <img src="../../upload/<?php echo $value['Hinh'] ?>"  alt="" style="max-width: 150px">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <?php } ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="SoLuongHang" class="col-sm-2 col-form-label form_label">Số lượng</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="SoLuongHang" id="SoLuongHang" value="<?php echo $hh['SoLuongHang'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="MoTa" class="col-sm-2 col-form-label form_label">Mô tả sản phẩm</label>
                                            <div class="col-sm-8">
                                                <!-- <textarea type="text" class="form-control" name="MoTa" id="MoTa" value="<?php echo $hh['MoTa'] ?>"></textarea> -->
                                                 <input type="text" class="form-control" id="MoTa" name="MoTa" value="<?php echo $hh['MoTa'] ?>" >
                                            </div>
                                        </div> 

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
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>