

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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ml-5">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-shopping-cart fa-1x"></i> Giỏ hàng<span class="sr-only">(current)</span></a>
                </li>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">                 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:space-evenly;">
                      <ul class="navbar-nav">
                        <li class="nav-item font-familly ">
                          <a class="nav-link text-dark" style="margin-right: 50px;" href="#"><h3>Áo</h3></span></a>
                        </li>
                        <li class="nav-item font-familly ">
                          <a class="nav-link text-dark" style="margin-right: 50px;" href="#"><h3>Quần</h3></a>
                        </li>
                        <li class="nav-item font-familly ">
                            <a class="nav-link text-dark" style="margin-right: 50px;" href=""><h3>Đầm</h3></a>
                        </li>
                        <li class="nav-item font-familly ">
                            <a class="nav-link text-dark" style="margin-right: 50px;" href="#"><h3>Chân váy</h3></a>
                        </li>                       
                    </div>
                </nav>
            </div>
        </div> -->
    </div>


<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tạm tính</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
       
        </tbody>
      </table>

    <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light">
          <a href="#" class="text-dark" style="text-decoration: none;">Tiếp tục mua hàng</a>
    </button>

    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <h4>TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div>
                Tổng tiền:
            </div>                                
            <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-5">
                <a href="#" class="text-dark" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH THANH TOÁN</a>
          </button>
        </div>
    </div>

   </div>

   






  

    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>