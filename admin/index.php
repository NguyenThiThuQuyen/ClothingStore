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
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@200&family=Satisfy&display=swap" rel="stylesheet">
</head>

<style>
    .font {
        font-family: 'Satisfy', cursive;
        font-size: 35px;
    }

    .font-familly {
        font-family: 'Saira Semi Condensed', sans-serif;
        /* font-family: 'Satisfy', cursive; */
        font-size: 22px;

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



    li {
        
        list-style-type: none;
    }

    a:link {
        
    }

</style>

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
                <a class="nav-link ml-5" style="font-size: 20px;" href="#"><i class="fas fa-home mr-2"></i>Trang chủ<span class="sr-only">(current)</span></a>                
            </li>
            <li class="">
                  <!-- <a class="" style="font-size: 20px;" href="Danh mục sản phẩm</a> -->
                  <div class="dropdown">
                    <button class="btn dropdown-toggle" style="font-size: 20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars fa-1x mr-2"></i>Danh mục sản phẩm
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="">Áo</a>
                      <a class="dropdown-item" href="an">Quần</a>
                      <a class="dropdown-item" href="m">Đầm</a>
                      <a class="dropdown-item" href="anvay">Chân váy</a>
                    </div>
                  </div>
            </li>
            </ul>
            </div>
                <nav>
                    <form class="form-inline mr-5">
                        <input class="form-control mr-sm-2" style="width: 65%;" type="search" placeholder="Tìm kiếm cùng Quinn Boutique" aria-label="Search">
                        <button class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark"  type="submit">Tìm kiếm</button>
                    </form>
                </nav>
        
                    <a href="" class="text-dark mr-3" style="text-decoration: none;">Đăng nhập</a>              
                    <a href="" class="text-dark" style="text-decoration: none;">Đăng ký</a>
              
            
        </nav>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">                 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:space-evenly;">
                      <ul class="navbar-nav">
                        <li class="nav-item font-familly">
                          <a class="nav-link text-dark" style="margin-right: 50px;" href="">Khách hàng</span></a>
                        </li>
                        <li class="nav-item font-familly">
                          <a class="nav-link text-dark" style="margin-right: 50px;" href="">Nhân viên</a>
                        </li>
                        <li class="nav-item font-familly">
                            <a class="nav-link text-dark" style="margin-right: 50px;" href="">Hàng hóa</a>
                        </li>
                        <li class="nav-item font-familly">
                            <a class="nav-link text-dark" style="margin-right: 50px;" href="">Đặt hàng</a>
                        </li>                       
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid p-0">
   

    </div> -->



  

    <div class="container-fluid p-0">
        <div class="nav bg-dark" style="justify-content: space-evenly;">
            <ul class="nav-list">
            <li class=" text-center text-white mt-3" style="list-style: none;">Hotline: 079.268.26</li>
            <li class=" text-center text-white" style="list-style: none;">Website: quinnboutique.co</li>
            <li class=" text-center text-white" style="list-style: none;">Địa chỉ: Số 12, Hai Bà Trưng, Quận 1, TP Hồ Chí Min</li>
            </ul>
        </div>
    </div>
    
            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>