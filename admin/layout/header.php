<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Hàng hóa</title> -->
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&family=Satisfy&display=swap" rel="stylesheet">
</head>


<body>
    
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-md navbar-light navbar-bg">
    <a class="navbar-brand ml-4" href="#"><h3 class="font">Quinn Boutique</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="vbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between;">
    <ul class="navbar-nav">
    <li class=" active">
        <a class="nav-link ml-5" style="font-size: 20px;" href="../index.php"><i class="fas fa-home mr-2"></i>Trang chủ<span class="sr-only">(current)</span></a>                
    </li>
    <li class="">
          <div class="dropdown">
            <button class="btn dropdown-toggle" style="font-size: 20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars fa-1x mr-2"></i>Danh mục
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../NhanVien/danhsach.php">Nhân viên</a>
              <a class="dropdown-item" href="../HangHoa/danhsach.php">Hàng hóa</a>
              <a class="dropdown-item" href="../DatHang/lietke.php">Đặt hàng</a>
            </div>
        </div>
    </li>
    </ul>
    </div>
        <nav>
            <form class="form-inline mr-5">
                <div style="font-size: 20px;">
                <i class="fas fa-user"></i>
                    <?php
                          if (!isset($_SESSION['username'])) {
                            header("location: ./dangnhap.php");
                          } else {
                            echo $_SESSION['username'];
                          }
                    ?>
                </div>
                <a href="../dangxuat.php" name='logout' class="text-dark ml-4" style="text-decoration: none; font-size: 20px;">
                  <i class="fas fa-sign-out-alt mr-2"></i>
                Đăng xuất</a>
            </form>
        </nav>
</nav>
</div>
