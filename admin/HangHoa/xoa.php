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

    if(isset($_POST['TenHH'])){
        $TenHH = $_POST["TenHH"];
        $QuyCach = $_POST["QuyCach"];
        $Gia = $_POST["Gia"];
        $SoLuongHang = $_POST["SoLuongHang"];
        $MaLoaiHang = $_POST["MaLoaiHang"];

        $sql = "INSERT INTO hanghoa(TenHH, QuyCach, Gia, SoLuongHang, MaLoaiHang)
                VALUES ( '$TenHH', '$QuyCach', '$Gia', '$SoLuongHang', '$MaLoaiHang')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: danhsach.php');
        }
        else{
            echo "Lỗi";
        }
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
        <div class="row">
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
                        <h2 class="text-center mt-4">THÊM HÀNG HÓA</h2>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-9 mt-4">
                      <div class="container">                  
                            <form class="mx-auto" action="" method="post"> 
                                        <div class="form-group row mt-3">
                                            <label for="TenHH" class="col-sm-2 col-form-label form_label">Tên hàng hóa</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="TenHH" id="TenHH">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="QuyCach" class="col-sm-2 col-form-label form_label">Quy cách</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="QuyCach" id="QuyCach">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Gia" class="col-sm-2 col-form-label form_label">Giá</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="Gia" id="Gia">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="SoLuongHang" class="col-sm-2 col-form-label form_label">Số lượng</label>
                                            <div class="col-sm-8">
                                                <input type="munber" class="form-control" name="SoLuongHang" id="SoLuongHang">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="" class="col-sm-2 col-form-label form_label">Loại hàng</label>                            
                                            <div class="col-sm-8">
                                            <select class="custom-select" name="MaLoaiHang">
                                                <option selected>Chọn</option>
                                                <?php foreach($loaihanghoa as $key => $value) { ?>
                                                    <option value="<?php echo $value['MaLoaiHang'] ?>"><?php echo $value['TenLoaiHang'] ?></option>
                                                <?php } ?>

                                            </select>
                                            </div>
                                        </div>                            
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark" name="submit" id="submit">Save changes</button>
                                
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