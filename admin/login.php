<?php

    session_start();
    include('config/config.php');
    // session_destroy();
    if(isset($_POST['dangnhap']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM TaiKhoan WHERE username='$username' AND password = '$password' ";
        $row = mysqli_query($conn, $sql);
        // $row_dangnhap = mysqli_fetch_array($row);
        $count = mysqli_num_rows($row);
        if($count>0)
        {          
            $_SESSION['username'] = $username;
            header("location: index.php");
        }
        else{
            echo "Lỗi";
        }
    }
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="uft-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="./main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    </head>
    <body>
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-12 p-0 pr-2">
                    <div class="card mb-3" >
                        <div class="row no-gutters">
                          <div class="col-8">
                            <div><img src="../picture/logo_main.png" alt="logo" style="height:150px; width: 200px;"></div>
                            <div class="card-body">
                                <h1 class="card-title text-center font-color">Login</h1>
                                <form action="" method="post">
                                    <div class="form-container">

                                        <label for="username">Tên đăng nhập</label>
                                        <input type="text" class="form-control" name="username" id="username">
                                            <br />                           
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                            <br />
                                        
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
                                           <button type="submit" name="dangnhap" class="btn btn_item float-right">Đăng nhập</button>

                                        </div>  
                                    </div>                                        
                               </form>
                            </div>
                
                          </div>
                            <div class="col-4">
                            <img src="../picture/40.jpeg" alt="hinh-nen" style="max-width: 540px; height: 52rem;">
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