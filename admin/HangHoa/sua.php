<?php
    include('../admin/config/config.php');
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../login.php');
    }
?>

<?php
    include '../config/config.php';
    $loaihanghoa = mysqli_query($conn, "SELECT * FROM loaihanghoa");
    $hanghoa = mysqli_query($conn, "SELECT * FROM HangHoa hh join LoaiHangHoa loai on hh.MaLoaiHang = loai.MaLoaiHang");

    if(isset($_GET['MSHH'])){
        $MSHH = $_GET['MSHH'];
        $data = mysqli_query($conn,"SELECT * FROM hanghoa WHERE MSHH = $MSHH ");
        $hh = mysqli_fetch_assoc($data);
    }

    if(isset($_POST['TenHH'])){
        $TenHH = $_POST["TenHH"];
        $QuyCach = $_POST["QuyCach"];
        $Gia = $_POST["Gia"];
        $SoLuongHang = $_POST["SoLuongHang"];
        $MaLoaiHang = $_POST["MaLoaiHang"];

        $sql = "UPDATE hanghoa SET TenHH = '$TenHH', QuyCach = '$QuyCach', Gia = '$Gia', SoLuongHang = '$SoLuongHang'
                 WHERE MSHH = $MSHH";

        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: danhsach.php');
        }
        else{
            echo "Lỗi";
        }
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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
    <?php
        include('../layout/header.php');
    ?> 
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-2">         
                <div class="card-body">
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
                            <form class="mx-auto" action="" method="post"> 
                                    <h6 class="mt-5">Nhập thông tin:</h6>
                                        <div class="form-group row mt-5">
                                            <label for="TenHH" class="col-sm-2 col-form-label form_label">Tên hàng hóa</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="TenHH" id="TenHH" value="<?php echo $hh['TenHH'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="QuyCach" class="col-sm-2 col-form-label form_label">Quy cách</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="QuyCach" id="QuyCach" value="<?php echo $hh['QuyCach'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Gia" class="col-sm-2 col-form-label form_label">Giá</label>
                                            <div class="col-sm-6">
                                                <input type="munber" class="form-control" name="Gia" id="Gia" value="<?php echo $hh['Gia'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="SoLuongHang" class="col-sm-2 col-form-label form_label">Số lượng</label>
                                            <div class="col-sm-6">
                                                <input type="munber" class="form-control" name="SoLuongHang" id="SoLuongHang" value="<?php echo $hh['SoLuongHang'] ?>">
                                            </div>
                                        </div>
                           
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-light color-btn my-2 my-sm-0 text-dark" name="submit" id="submit">Save changes</button>
                                
                                </div>
                            </form>                      
                    </div>              
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
</body>
</html>