
<?php
    include 'admin/config/config.php';
    session_start();
// session_destroy();
    if(isset($_GET['MSHH'])){
        $MSHH = $_GET['MSHH'];
    }

    // $query = mysqli_query($conn, "SELECT * FROM hanghoa hhh join hinhhanghoa ma on hhh.MSHH = ma.MSHH");

    $query = mysqli_query($conn, "SELECT * FROM hanghoa WHERE MSHH = ".$_GET['MSHH'] );
    // $query = mysqli_query($conn, "SELECT * FROM hanghoa WHERE MSHH = ".$_GET['MSHH'] );

    if($query){
        $hanghoa = mysqli_fetch_assoc($query);
    }

    $item = [
        'MSHH' => $hanghoa['MSHH'],
        'TenHH' => $hanghoa['TenHH'],
        // 'Hinh' => $hanghoa['Hinh'],
        'Gia' => $hanghoa['Gia'],
        'SoLuong' => 1
    ];


    if(isset($_SESSION['cart'][$MSHH])){
        $_SESSION['cart'][$MSHH]['SoLuong'] +=1;
        if(isset($_POST["update"])){
            if(isset($_SESSION["cart"])){
                foreach($_SESSION["cart"] as $value){
                    if($_POST["SoLuong".$value["MSHH"]] <= 0){
                        unset($_SESSION["cart"][$value["MSHH"]]);
                    }
                    else{
                        $_SESSION["cart"][$value["MSHH"]]["SoLuong"] = $_POST["SoLuong".$value['MSHH']];
                    }
                }
            }
        }
    }
    else{
        $_SESSION['cart'][$MSHH] = $item;
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
        background-color:rgb(231, 187, 166);
    }

    .color-bg {
        background-color:rgb(243, 232, 227);
    }

    .img-wrap {
            height: 330px;
            overflow: hidden;
        }

    .img-wrap img {
            height: auto;
            width: 100%;
        }
    
    .btn-light:hover {
        background-color: rgb(226, 169, 143);
            
    }

</style>

<body>
    <div class="container-fluid">
        
        <div class="row max-auto navbar-bg">
            <div class="col-12 text-center">
                <h1 class="font-familly pt-3">Trải nghiệm mua sắm cùng <h1 class="font">Quinn Boutique</h1></h1>
            </div>
            <div class="col-3" class="collapse navbar-collapse" id="navbarSupportedContent">
                
            </div>           

            <div class="col-6 pb-3">
                <nav>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" style="width: 85%" type="search" placeholder="Tìm kiếm cùng Quinn Boutique" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                </nav>
            </div>
            <div class="col-3">
                <!-- <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ml-5">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-shopping-cart fa-1x"></i> Giỏ hàng<span class="sr-only">(current)</span></a>
                </li> -->
            </div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-12 text-center">
                <h2>ĐƠN HÀNG</h2>
            </div>
        </div>
    </div>


<form action="" method="post">
    <div class="container">    
        <table class="table">
            <thead>
            <tr>                
                <th scope="col">Tên sản phẩm</th>
                <!-- <th scope="col">Hình ảnh</th> -->
                <th scope="col">Giá bán</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tạm tính</th>
            </tr>
            </thead>
            <tbody>

            <?php if(isset($_SESSION['cart'])){
                $tonghoadon = 0;
                foreach ($_SESSION['cart'] as $value){                
                $tong = 0;
                $tong = $value['Gia']*$value['SoLuong'];
               
                $tonghoadon += ($value['Gia']*$value['SoLuong']);
            ?>
                <tr>                
                    <td><?php echo $value['TenHH'] ?></td>
                    <!-- <td><img src="../picture/<?php echo $value['Hinh'] ?>" alt="" width="70"></td> -->
                            
                    <td><?php echo $value['Gia'] ?></td>
                    <td><input type="number" min="1" name="SoLuong<?php echo $value['MSHH'] ?>" value="<?php echo $value['SoLuong'] ?>"></td>
                    <td><?php echo number_format  ($tong,0,",",".") ?></td>               
                </tr>
            <?php }
             } ?>
            </tbody>
        </table>
        <div class="float-right mt-3">
            <button type="submit" name="update">UPDATE CART</button>
        </div>

    <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light">
          <a href="index.php" class="text-dark" style="text-decoration: none;">Tiếp tục mua hàng</a>
    </button>

    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <h4>TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div>
                Tổng tiền:
                <?php echo number_format($tonghoadon) ?> VND
            </div>                                
            <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-5">
                <a href="Khachhang/dangky.php" class="text-dark" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH THANH TOÁN</a>
          </button>
        </div>
    </div>

   </div>
</form>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>