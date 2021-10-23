<?php
    include('../admin/config/config.php');
    if(isset($_POST['dangky']) && $_POST['HoTenKH'] != '' && $_POST['SoDienThoai'] != '' && $_POST['Password'] != ''){
        $HoTenKh = $_POST['HoTenKH'];
        $SoDienThoai = $_POST['SoDienThoai'];
        $username = $_POST['username'];
        $Password = md5($_POST['Password']);

        $sql = mysqli_query($conn, "INSERT INTO KhachHang(HoTenKH, SoDienThoai, username, Password)
                                    VALUES ('$HoTenKh', '$SoDienThoai', '$username', '$Password')");
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
    * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

       body {
            /* background-image: url(../picture/logo.jpg); */
            /* background-color: pink; */
            backdrop-filter: blur(3px);
        }

        .font-color {
            color: rgb(214, 91, 47);
            font-size: 48px;
            font-weight: bold;
        
        }

        .form-container {
            max-width: 600px;
            min-height: 700px;
            padding: 32px;
            margin: 0px auto 0 auto;
            background-color: #ffff;
            font-weight: 545;
        }

        .btn {
            text-decoration: none;
            padding: 10px 42px;
            margin: 15px 25px;
            font-size: 20px;
        }

        .btn_item {
            background-color: rgb(214, 91, 47);
            color: #fff;
        }

        .color {
            /* margin-top: 100px; */
            color: rgb(214, 91, 47);
        }


    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">                               
            </div>
            <div class="col-6">
                <div class="card-body">                   
                    <form class="form-container" method="post">
                        <div class="text-center color">
                            <p>Welcome to viviet.com <i class="fas fa-heart color"></i></p>
                        </div>
                        <h1 class="card-title text-center font-color">Create Account</h1>
                        <br>
                        <div>                         
                            <label for="HoTenKH">Họ tên:</label>
                            <input type="text" class="form-control" name="HoTenKH" id="HoTenKH">
                                <br />
                            <label for="SoDienThoai">Số điện thoại</label>
                            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai">                           
                                <br />
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" class="form-control" name="username" id="username">
                                <br />                        
                            <label for="Password">Mật khẩu</label>
                            <input type="password" name="Password" class="form-control" id="Password">
                                <br />
                            <div class="form-group form-check">
                               <button type="submit" name="dangky" class="btn btn_item float-right">Đăng ký</button>
                            </div>
                            <div class="text-center" style="margin-top: 170px;">
                                <h6>Đã có tài khoản? <a href="./dangnhap.php" class="color">Đăng nhập</a></h6>

                            </div>                            
                        </div>
                    </div>                                     
                   </form>
                </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>