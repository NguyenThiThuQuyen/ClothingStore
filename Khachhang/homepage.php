<?php
    include '../admin/config/config.php';
    $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa");
    $hanghoa = mysqli_query($conn, "SELECT * FROM hanghoa");
   session_start();
      if (!isset($_SESSION['tendangnhap'])) {
          header("location: ./dangnhap.php");
      }
      $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

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

    a{
      text-decoration: none;
      color: black;
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
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <a class="navbar-brand ml-4" href="#"><h3 class="font">Quinn Boutique</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between;">
            <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link ml-5" style="font-size: 20px;" href="./homepage.php"><i class="fas fa-home mr-2"></i>Trang chủ<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <!-- <a class="nav-link" style="font-size: 20px;" href="#">Danh mục sản phẩm</a> -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="font-size: 20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars fa-1x mr-2"></i>Danh mục sản phẩm
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php if (($loaihanghoa)) {?>
                    <?php foreach ($loaihanghoa as $key => $value) {?>
                        <a class="dropdown-item" href="./menu.php?MaLoaiHang=<?php echo $value['MaLoaiHang'] ?>"><?php echo $value['TenLoaiHang'] ?></a>
                    <?php } ?>
                    <?php } ?>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                  <a href="./view-basket.php" class="nav-link text-dark" style="text-decoration: none; font-size: 20px;">
                    <i class="fas fa-shopping-cart fa-1x mr-3"></i>Giỏ hàng (<?php echo count($cart) ?>)
                  </a>
              </li>
            </ul>
            <ul class="navbar-nav">
             
              
                <li class="nav-item ml-4">
                <div style="font-size: 20px;">                   
                <i class="fas fa-user"></i>
                     <?php
                          // session_destroy();
                          if (!isset($_SESSION['tendangnhap'])) {
                            header("location: ./dangnhap.php");
                          } else {
                            echo $_SESSION['tendangnhap'];
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
        <div class="row navbar-bg p-0">
            <div class="col-12 text-center">
                <h1 class="font-familly pt-3">Trải nghiệm mua sắm cùng <h1 class="font">Quinn Boutique</h1></h1>
            </div>
            <div class="col-3" class="collapse navbar-collapse" id="navbarSupportedContent">
                
            </div>           

            <div class="col-6 pt-3 pb-3">
                <nav>
                    <form class="form-inline" id="timsp" method="GET">
                        <input class="form-control mr-sm-2" name="name" style="width: 85%;" type="search" placeholder="Tìm kiếm cùng Quinn Boutique" aria-label="Search">
                        <button class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark"  type="submit">Tìm kiếm</button>
                    </form>
                </nav>
            </div>
            <div class="col-3">
            </div>
            <div class="container">     
              <div class="row text-center">    
                <div class="col-md-3 mt-4">
                <?php
                if(isset($_GET['name'])){
                  $timkiem = $_GET['name'];
                  $sql_timkiem = "SELECT * FROM hanghoa WHERE TenHH LIKE '%$timkiem%'";
                  $query = mysqli_query($conn, $sql_timkiem);
                  while($result = mysqli_fetch_array($query)){
                    $MSHH = $result['MSHH'];
                  $sql_show = "SELECT * FROM hanghoa WHERE MSHH ='$MSHH'";
                  $query_show = mysqli_query($conn, $sql_show);
                  while ($result_sp = mysqli_fetch_array($query_show)) { ?>
                  <div class="card">
                    <div class="product-top img-wrap">                         
                        <img class="card-img-top img-wrap" name="Hinh" src="../upload/<?php echo $result_sp['Hinh'] ?>" >                          
                    </div>
                    <div class="product-info m-2">
                      <a href="" name="Ten" class="product-1"><?php echo $result['TenHH']  ?></a>
                        <div name="Gia" class="product-price ">Giá: <?php echo $result['Gia'] ?> 
                          <a href="./basket.php?MSHH=<?php echo $result['MSHH'] ?>"><i class="fas fa-shopping-cart fa-1x"></i></a>
                          <button class="btn btn-outline-light color-btn my-3 my-sm-0 text-dark"  type ="submit" >
                            <a href="./chitietsp.php?MSHH=<?php echo $result['MSHH'] ?>">Xem chi tiết</a>
                          </button>
                        </div>
                    </div>
                    </div> 
                  <?php } } } ?>
                </div>    
              </div>      
            </div>
        </div>

        <div class="row mr-0">
            <div class="col-3"></div>
            <div class="col-6">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">                 
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:space-evenly;">
                    <?php if (($loaihanghoa)) {?>
                    <?php foreach ($loaihanghoa as $key => $value) {?>
                    <ul class="navbar-nav">
                        <li class="nav-item font-familly ">
                          <a class="nav-link text-dark"  href="./menu.php?MaLoaiHang=<?php echo $value['MaLoaiHang'] ?>"><h3><?php echo $value['TenLoaiHang'] ?></h3></a>                          
                        </li>                       
                    </ul>
                    <?php } ?>
                    <?php } ?>                     
            </div>
            </nav>
            <div class="col-3"></div>
            </div>
            </div>
        </div>
    </div>


    <div class="container p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../picture/7.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../picture/4.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../picture/5.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <div class="row pb-5 p-0">
        <div class="col-12 mt-2">
            <p class="text-center" style="font-size: 45px;">Danh mục sản phẩm</p>                                 
        </div>             
    </div> 
    <div class="color-bg p-0">
        <div class="container">
        <div class="row text-center">
              <?php 
                $sql_hanghoa = mysqli_query($conn, "SELECT * FROM HangHoa");
                if (($sql_hanghoa)) {?>
                  <?php foreach ($sql_hanghoa as $key => $row){?>
                    <div class="col-md-3 mt-4">
                      <div class="card">
                        <div class="product-top img-wrap">                         
                            <img class="card-img-top img-wrap" src="../upload/<?php echo $row['Hinh'] ?>" alt="" >                          
                        </div>
                        <div class="product-info m-2">
                          <a href="" class="product-1"><?php echo $row['TenHH'] ?></a>
                            <div class="product-price ">Price: <?php echo $row['Gia'] ?> VND
                            <a href="./basket.php?MSHH=<?php echo $row['MSHH'] ?>"><i class="fas fa-shopping-cart fa-1x"></i></a>
                            <button class="btn btn-outline-light color-btn my-3 my-sm-0 text-dark"><a href="./chitietsp.php?MSHH=<?php echo $row['MSHH'] ?>">Xem chi tiết</a></button>
                            </div>
                        </div>
                      </div>
                    </div>  
                  <?php } ?> 
              <?php } ?>  
            </div>      
        </div>
    </div>


    <div class="container-fluid p-0">
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