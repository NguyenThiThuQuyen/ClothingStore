
<?php
        include '../admin/config/config.php';
        session_start();    
        if (!isset($_SESSION['username'])) {
            header("location: ./dangnhap.php");
        } 

    $sql_khachhang="SELECT * FROM KhachHang  WHERE username = '".$_SESSION['username']."'";
    $khachhang = mysqli_query($conn,$sql_khachhang);
    if(isset($_POST['submit'])){
        $DiaChi = $_POST["DiaChi"];
        $MSKH = $_POST["MSKH"];    
        $sql = "INSERT INTO diachi(DiaChi, MSKH) VALUES ( '$DiaChi', '$MSKH')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: ./thanhtoan.php');
        }
        else{
            // echo "Lỗi";
            echo "Error updating record: " . $conn->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&family=Satisfy&display=swap" rel="stylesheet">
</head>

<style>
    .font {
        font-family: 'Satisfy', cursive;
    }

    .font-familly {
        font-family: 'Saira Semi Condensed', sans-serif;
        font-family: 'Satisfy', cursive;
    }

    .navbar-bg {
        /* background-color:rgb(233, 141, 110); */
        background-color:rgb(231, 187, 166);
    }

    .color-bg {
        background-color:rgb(243, 232, 227);
    }

    .ol-color {
        color: rgb(224, 150, 115);
    }

    .color-btn {
        background-color:rgb(243, 214, 201);
    }

    .btn-light:hover {
        background-color: rgb(226, 169, 143);
            
    }

    .img-wrap {
            height: 330px;
            overflow: hidden;
        }

    .img-wrap img {
            height: auto;
            width: 100%;
        } 
</style>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-md navbar-light navbar-bg">
            <a class="navbar-brand ml-4" href="#"><h3 class="font">Quinn Boutique</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link ml-5" style="font-size: 20px;" href="#"><i class="fas fa-home mr-3"></i>Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" style="font-size: 20px;" href="#">Danh mục sản phẩm</a> -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="font-size: 20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars fa-1x mr-3"></i>Danh mục sản phẩm
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php if (($loaihanghoa)) {?>
                    <?php foreach ($loaihanghoa as $key => $value) {?>
                        <a class="dropdown-item" href="./menu.php?MaLoaiHang=<?php echo $value['MaLoaiHoang'] ?>"><?php echo $value['TenLoaiHang'] ?></a>
                    <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                      <a href="./basket.php" class="nav-link text-dark" style="text-decoration: none; font-size: 20px;"><i class="fas fa-shopping-cart fa-1x mr-3"></i>Giỏ hàng</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              
                <li class="nav-item ml-4">
                <div style="font-size: 20px;">                   
                <i class="fas fa-user"></i>
                     <?php
                          // session_destroy();
                          if (!isset($_SESSION['username'])) {
                            header("location: ./dangnhap.php");
                          } else {
                            echo $_SESSION['username'];
                          }
                      ?>
                </div>
                </li>
                <li class="nav-item ml-4">                   
                    <a href="./dangxuat.php" name='logout' class="text-dark" style="text-decoration: none; font-size: 20px;">
                      <i class="fas fa-sign-out-alt mr-1"></i>
                    Đăng xuất</a>
                </li>
            </ul>
            
            </div>
          </nav>

    </div>
    


    <div class="container-fluid p-0">
            <div class="col-10">
                <div class="row">
                <div class="col-1"></div>
                    <div class="col-9 mt-3"> 
                    <h2 class="text-center mt-3">ĐỊA CHỈ KHÁCH HÀNG</h2>
                            <form class="mx-auto" action="" method="post"> 
                                    <h6 class="mt-2">Nhập thông tin:</h6>
                                        <div class="form-group row mt-5 mx-auto">
                                        <label for="DiaChi" class="col-sm-3 col-form-label form_label">Địa chỉ</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="DiaChi" id="DiaChi" placeholder="Số nhà, tên đường, phường/xã, quận/huyên, tỉnh/TP" value="">
                                            </div>
                                        </div>  
                                        
                                        <div class="form-group row mt-5 mx-auto">
                                        <label for="username" class="col-sm-3 col-form-label form_label">Tên đăng nhập</label>
                                            <div class="col-sm-11">                          
                                               <select class="form-control" id="MSKH" name="MSKH">
                                                    <?php
                                                    while($row_khachhang = mysqli_fetch_assoc($khachhang)){?>
                                                    <option value="<?php echo $row_khachhang['MSKH'] ?>"><?php echo $row_khachhang['HoTenKH'] ?></option>
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





    <div class="container-fluid mt-5 p-0">
        <div class="nav bg-dark" style="justify-content: space-evenly;">
            <ul class="nav-list">
                <li class="nav-item text-center text-white mt-3" style="list-style: none;">Hotline: 079.268.268</li>
                <li class="nav-item text-center text-white" style="list-style: none;">Website: quinnboutique.com</li>
                <li class="nav-item text-center text-white" style="list-style: none;">Địa chỉ: Số 12, Hai Bà Trưng, Quận 1, TP Hồ Chí Minh</li>
            </ul>
        </div>
    </div>
    
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>



