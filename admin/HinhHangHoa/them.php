<?php
    include '../config/config.php';
    $hanghoa = mysqli_query($conn, "SELECT * FROM hanghoa");
    $hinhhanghoa = mysqli_query($conn, "SELECT * FROM hinhhanghoa hhh join HangHoa ma on hhh.MSHH = ma.MSHH");

    

    if(isset($_POST['TenHinh'])){
        $TenHinh = $_POST["TenHinh"];
        $MSHH = $_POST["MSHH"];
      
        // var_dump($_FILES);
        // die();
        $target_dir = "../../upload/";
        $Hinh = $target_dir . basename($_FILES["Hinh"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($Hinh,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["Hinh"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }
        
        // Check if file already exists
        if (file_exists($Hinh)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["Hinh"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["Hinh"]["tmp_name"], $Hinh)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["Hinh"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
        }

        $sql = "INSERT INTO hinhhanghoa(TenHinh, Hinh, MSHH) VALUES ( '$TenHinh', '$Hinh', '$MSHH')";
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
                            <form class="mx-auto" action="" method="post" enctype="multipart/form-data"> 
                                    <h6 class="mt-5">Nhập thông tin:</h6>
                                        <div class="form-group row mt-5">
                                            <label for="TenHinh" class="col-sm-2 col-form-label form_label">Tên hình</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="TenHinh" id="TenHinh">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="Hinh" class="col-sm-2 col-form-label form_label">Hình ảnh</label>
                                            <div class="col-sm-6">
                                                <input type="file" class="form-control" name="Hinh" id="Hinh">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="" class="col-sm-2 col-form-label form_label">Tên hàng hóa</label>                            
                                            <div class="col-sm-6">
                                            <select class="custom-select" name="MSHH">
                                                <option selected>Chọn</option>
                                                <?php foreach($hanghoa as $key => $value) { ?>
                                                    <option value="<?php echo $value['MSHH'] ?>"><?php echo $value['TenHH'] ?></option>
                                                <?php } ?>

                                            </select>
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