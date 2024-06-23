<?php
require 'config.php';
if(empty($_SESSION["adminId"])){
    header("Location: AdminLogin.php");
  }

if(isset($_POST["submit"])){
    $user_name          =$_POST["user_name"];
    $presc              =$_POST["file"];
    $sql = "INSERT INTO presc VALUES ('','$user_name ', '$presc ' )";
    if (!mysqli_query($conn, $sql)) {
        "<script>alert ('Registration Successfully Done'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
    header("refresh:0; url=appontment_Done.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/appointent.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>الخدمات - التأمين الصحي الشامل </title>
</head>
<style>
    .company{
    background-image: url(images/presc.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh;
    position: relative;
}
.company .rgba{
    background-color: rgba(0, 0, 0, 0.2);
    height: 100vh;
}
</style>
<body>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 330px">
            <div class="nav-menu">
                
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <li>
                    <a class="navbar-brand active" href="index.php" style="color: rgb(2, 2, 105); " >الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="about-us.php" style="color: rgb(2, 2, 105);">معلومات عنا</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(2, 2, 105); margin-right: 10px;">
                    الخدمات
                    </a>
                    <ul class="dropdown-menu" style="direction: rtl; text-align:right">
                        <li><a class="dropdown-item" href="admin_management.php" style="direction: rtl; text-align:right">
                        الإدارة
                        </a></li>
                        <li><a class="dropdown-item" href="service_choice.php"style="direction: rtl; text-align:right">
                        الحصول على الخدمات  
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active mx-4" href="FAQ.php" style="color: rgb(2, 2, 105);">الأسئلة الشائعة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="help.php" style="color: rgb(2, 2, 105);"> المساعدة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-4" aria-current="page" href="contact_us.php" style="color: rgb(2, 2, 105);"> تواصل معنا</a>
                </li>
                <li class="nav-item">
                <?php
                  if(!empty($_SESSION["login"])){
                    echo "<a class='nav-link active' aria-current='page' href='logout.php' style='color: rgb(2, 2, 105); '> تسجيل خروج</a>";
                  }
                  else
                  echo "<a class='nav-link active' aria-current='page' href='Welcome.php' style='color: rgb(2, 2, 105); '> دخول / تسجيل</a>";
                  ?>
                </li>
                
                
                
            </ul>

            <?php
                if(!empty($_SESSION["userId"])){
                    echo "<a href='user_profile.php' class='profile'> <img src='images/profile1.png' style = 'position: absolute; width: 70px;
                    top: 18px; right: 1415px;'></a>";
                }
            ?>
            
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo">
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->

    
    <!-- Start Company Form Section -->
    
    <div class="company">
        <div class="rgba">
            <div class="content">
                
                <form method="POST" action="admin_management.php" >
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(4, 4, 54); font-weight: bold;" class="mb-4">إضافة روشتة</h2>
                

                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                            <input type="text" name="user_name" class="form-control" placeholder="اسم المريض" aria-label=" اسم المريض " required >
                            <span class="input-group-text"><i class="far fa-user"></i></span> 
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                      </div> <!-- /row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                            <!-- <input type="file" name="presc" class="form-control" placeholder="صورة الروشتة" aria-label=" صورة الروشتة " required value="upload"> -->
                            <input type="file" name="file"class="form-control" placeholder="صورة الروشتة" aria-label=" صورة الروشتة " required >
                            <!-- <input type="submit" name="submit" value="Upload"> -->
                        </div> <!-- /col -->
                      </div> <!-- /row-->

                      <a href="appontment_Done.php"><button  name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(4, 4, 54);">تسجيل</button></a>
                </form>
            </div>
        </div>
    </div>

    <!-- End Company Form Section -->
    <script src="js/company.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>