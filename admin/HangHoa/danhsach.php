<?php
    include('../admin/config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../login.php');
    }
?>

<?php
    include '../config/config.php';
    // $hanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");
    $hanghoa = mysqli_query($conn, "SELECT * FROM hanghoa hh join LoaiHangHoa loai on hh.MaLoaiHang = loai.MaLoaiHang");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàng hóa</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
        font-size: 22px;

    }

    .navbar-bg {
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

    .dropdown-menu {
        background-color:rgb(231, 187, 166);
    }

</style>
<body>
    
    <div class="container-fluid p-0">
        <?php
            include('../layout/header.php');
        ?>  
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-2">         
                <div class="card-body p-0">
                    <div class="card" style="height:640px">
                        <?php
                            include('../layout/menu.php');
                        ?>                     
                    </div>  
                </div>                               
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="./them.php" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">DANH SÁCH HÀNG HÓA</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th>MSHH</th>
                              <th>Tên</th>
                              <th>Quy cách</th>
                              <th>Giá</th>
                              <th>Số lượng</th>
                              <th>Tên loại</th>
                              <th>Điều chỉnh</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($hanghoa as $key => $value) {?>
                            <tr>
                            <td><?php echo $value['MSHH'] ?></td>
                              <td><?php echo $value['TenHH'] ?></td>
                              <td><?php echo $value['QuyCach'] ?></td>
                              <td><?php echo $value['Gia'] ?></td>
                              <td><?php echo $value['SoLuongHang'] ?></td>
                              <td><?php echo $value['TenLoaiHang'] ?></td>
                              <td>
                                <a href="sua.php?MSHH=<?php echo $value['MSHH'] ?>" title="Sửa" class="btn btn-white"><i class="fas fa-pen mr-3"></i></a>                                
                                <a href="xoa.php?MSHH=<?php echo $value['MSHH'] ?>" title="Xóa" class="btn btn-white"><i class="fas fa-trash-alt"></i></a>
                            
                              </td>
                            </tr>
                            <?php } ?>
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