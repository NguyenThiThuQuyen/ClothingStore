<?php
    include('../config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../dangnhap.php');
    }
?>
<?php
    include '../config/config.php';
    $hanghoa = mysqli_query($conn, "SELECT * FROM hanghoa");
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa hhh join HangHoa ma on hhh.MSHH = ma.MSHH");

    if(isset($_GET['MaHinh'])){
        $MaHinh = $_GET['MaHinh'];
        $data = mysqli_query($conn,"SELECT * FROM hinhhanghoa WHERE MaHinh = $MaHinh ");
        $hhh = mysqli_fetch_assoc($data);
    }

    if(isset($_POST['TenHinh'])){
        $TenHinh = $_POST["TenHinh"];
        $MSHH = $_POST["MSHH"];

        $target_dir = "../../upload/";
        $Hinh = $target_dir . basename($_FILES["Hinh"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($Hinh,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["Hinh"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
        
        // Check if file already exists
        if (file_exists($Hinh)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["Hinh"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["Hinh"]["tmp_name"], $Hinh)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["Hinh"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }


        $sql = "UPDATE hinhhanghoa SET TenHinh = '$TenHinh', Hinh = '$Hinh', MSHH = '$MSHH'
                 WHERE MaHinh = $MaHinh";

        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: danhsach.php');
        }
        else{
            echo "Lỗi";
        }
      }

?>

    <title>Sửa hình hàng hóa</title>
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
                    <h2 class="text-center mt-3">SỬA HÌNH HÀNG HÓA</h2>                   
                            <form class="mx-auto" action="" method="post" enctype="multipart/form-data"> 
                                    <h5 class="mt-5">Nhập thông tin:</h5>
                                        <div class="form-group row mt-5">
                                            <label for="TenHinh" class="col-sm-2 col-form-label form_label">Tên hình</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="TenHinh" id="TenHinh" value="<?php echo $hhh['TenHinh'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Hinh" class="col-sm-2 col-form-label form_label">Hình ảnh</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="Hinh" id="Hinh" value="<?php echo $hhh['Hinh'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="" class="col-sm-2 col-form-label form_label">Tên hàng hóa</label>                            
                                            <div class="col-sm-8">
                                            <select class="custom-select" name="MSHH">
                                                <option selected>Chọn</option>
                                                <?php foreach($hanghoa as $key => $value) { ?>
                                                    <option value="<?php echo $value['MSHH'] ?>"><?php echo $value['TenHH'] ?></option>
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