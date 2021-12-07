<?php
    include('../admin/config/config.php');
    if(isset($_POST['dangky']) && $_POST['HoTenKH'] != '' && $_POST['SoDienThoai'] != '' && $_POST['tendangnhap'] != '' && $_POST['password'] != ''){
        $HoTenKh = $_POST['HoTenKH'];
        $SoDienThoai = $_POST['SoDienThoai'];
        $tendangnhap = $_POST['tendangnhap'];
        $password = md5($_POST['password']);

        $sql = mysqli_query($conn, "INSERT INTO KhachHang(HoTenKH, SoDienThoai, tendangnhap, password)
                                    VALUES ('$HoTenKh', '$SoDienThoai', '$tendangnhap', '$password')");
        if($sql){
            // echo "Đăng ký thành công";
            header('location: ./dangnhap.php');
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta charset="uft-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    body{
            background-image: url("../upload/bg2.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .color-btn {
            background-color:rgb(226, 169, 143);
        }

        .color-btn:hover {
            background-color:rgb(226, 169, 180);
        }

        .color{
            color:rgb(225 99 47);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="margin-top: 5%">
                    <div class="card-body bg-white">
                        <div class="text-center">
                            <p class="color">Welcome to quinnboutique <i class="fas fa-heart color"></i></p>
                        </div>
                        <h2 class="card-title text-center font-color"><i>Đăng ký</i></h2>
                        <form action="" method="post">
                        <div class="form-container mx-3 mt-3">
                            <label for="HoTenKH">Họ tên:</label>
                            <input type="text" class="form-control" name="HoTenKH" id="HoTenKH">
                                <br />
                            <label for="SoDienThoai">Số điện thoại</label>
                            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai">                           
                                <br />
                            <label for="tendangnhap">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="tendangnhap" id="tendangnhap">
                                <br />                        
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" id="password">
                                <br />
                            <div class="form-group form-check">
                               <button type="submit" name="dangky" class="btn btn-outline-light color-btn text-dark float-right">Đăng ký</button>
                            </div>
                            <div class="text-center mt-5">
                                <h6>Đã có tài khoản? <a href="./dangnhap.php" class="color">Đăng nhập</a></h6>

                            </div>
                        </div>                                        
                       </form>
                    </div>
                    <div class="col-4"></div>
                </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>


