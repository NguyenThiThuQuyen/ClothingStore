<?php
    session_start();
    include('../admin/config/config.php');
    // session_destroy();
    // if(isset($_POST['dangnhap']) && $_POST['username'] != '' && $_POST['password'] != ''){
    //     $username = $_POST['username'];
    //     $password = md5($_POST['password']);
    //     $sql = "SELECT * FROM KhachHang WHERE username='$username' AND password = '$password' ";
    //     $row = mysqli_query($conn, $sql);
    //     // $row_dangnhap = mysqli_fetch_array($row);
    //     $count = mysqli_num_rows($row);
    //     if($count>0)
    //     {          
    //         $_SESSION['username'] = $username;
    //         header("location: homepage.php");
    //     }
    //     else{
    //         echo "Lỗi";
    //     }
    // }

    $password = $_POST['password'] ?? '';
    $username = $_POST['username'] ?? '';
    if ( $password == '' && $username == '') {
        echo "";
    } else {        
        $_SESSION['username'] = $username;
        header("location: homepage.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <meta charset="uft-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="./main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    </head>
    <style>
        body{
            background-image: url("../picture/bg2.jpeg");
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
    <body>
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-4"></div>           
                <div class="col-4" style="margin-top: 5%">
                    <div class="card-body bg-white">
                        <div class="text-center">
                            <p class="color">Welcome to quinnboutique <i class="fas fa-heart color"></i></p>
                        </div>
                        <h2 class="card-title text-center font-color"><i>Đăng nhập</i></h2>
                        <form action="" method="post">
                            <div class="form-container mx-3 mt-5">
                                <label for="username" >Tên đăng nhâp:</label>
                                <input type="text" class="form-control " name="username" id="username">
                                    <br />
                                                          
                                <label for="password" >Mật khẩu</label>
                                <input type="password" name="password" class="form-control " id="password">
                                    <br />
                                
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
                                   <button type="submit" name="dangnhap" class="btn btn-outline-light color-btn text-dark float-right mt-4">Đăng nhập</button>
                                </div>
                                <div class="text-center" style="margin-top: 100px;">
                                    <h6>Chưa có tài khoản? <a href="./dangky.php" class="color">Đăng ký</a></h6>
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