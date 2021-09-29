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
    html,body {
        font-family: 'Arial';
    }

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

    .dropdown-menu {
        background-color:rgb(231, 187, 166);
    }

    .card-body {
    padding: 0;
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
                        <i class="fas fa-bars fa-1x mr-2"></i>Danh mục
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="">Khách hàng</a>
                      <a class="dropdown-item" href="">Nhân viên</a>
                      <a class="dropdown-item" href="m">Hàng hóa</a>
                      <a class="dropdown-item" href="anvay">Đặt hàng</a>
                    </div>
                </div>
            </li>
            </ul>
            </div>
                <nav>
                    <form class="form-inline mr-5">
                        <input class="form-control mr-sm-2" style="width: 65%;" type="search" placeholder="Tìm kiếm cùng Quinn" aria-label="Search">
                        <button class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark"  type="submit">Tìm kiếm</button>
                    </form>
                </nav>
<!--  -->
        </nav>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-2">         
                <div class="card-body">
                    <div class="card" style="height:640px">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="bg-secondary text-white"><h5>Danh mục quản lý</h5></th>
                            </tr>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td>
                                    <div class="btn-group dropright bg-black">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-address-book mr-2"></i>Quản lý khách hàng
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="">Khách hàng</a>
                                            <a class="dropdown-item" href="">Địa chỉ khách hàng</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="btn-group dropright">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-user-tie mr-2"></i>Quản lý nhân viên
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="">Nhân viên</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="btn-group dropright">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fab fa-elementor mr-2"></i>Quản lý hàng hóa
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="">Hàng hóa</a>
                                            <a class="dropdown-item" href="">Loại hàng hóa</a>
                                            <a class="dropdown-item" href="">Hình hàng hóa</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="btn-group dropright">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="far fa-calendar-minus mr-2"></i>Quản lý đặt hàng
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="">Đặt hàng</a>
                                            <a class="dropdown-item" href="">Chi tiết đặt hàng </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>                                  
                </div>  

                </div>                               
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="./them.php" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>

                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus"></i> Thêm mới
                            </button> -->

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm loại hàng hóa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/admin/xuly.php" method="post">
                                <div class="modal-body">
                                    <h6>Nhập thông tin:</h6>
                                        <div class="form-group row mt-5">
                                            <label for="TenLoaiHang" class="col-sm-3 col-form-label form_label">Tên loại</label>
                                            <div class="col-sm-8">
                                            <input type="text" class="form-control" name="TenLoaiHang" id="TenLoaiHang">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   
                                    <button type="button" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark" name="themloai">Save changes</button>

                                </div>
                                </div>
                                </form>
                            </div>
                            </div> -->



                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">DANH SÁCH LOẠI NGUYÊN LIỆU</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã loại hàng</th>
                              <th scope="col">Tên loại hàng</th>
                              <th scope="col">Điều chỉnh</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td></td>
                              <td></td>
                              <td>
                                <a href=""><i class="fas fa-pen mr-5"></i></a>

                                <form action="" method="post" class="d-inline">
                                
                                  <button href="" type="submit" class="btn btn-white"><i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr>
                         
                          </tbody>
                        </table>
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