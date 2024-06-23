<?php

require 'config.php';

if(!empty($_SESSION["login"])){
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>دخول / تسجيل  - التأمين الصحي الشامل</title>
</head>
<body>
   
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 320px">
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
                //   if(!empty($_SESSION["login"])){
                //     echo "<a class='nav-link active' aria-current='page' href='logout.php' style='color: rgb(2, 2, 105); '> تسجيل خروج</a>";
                //   }
                //   else
                  echo "<a class='nav-link active' aria-current='page' href='Welcome.php' style='color: rgb(2, 2, 105); '> دخول / تسجيل</a>";
                  ?>
                </li>
                
                
                
            </ul>
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo">
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->


    <!-- Start Welcome Section -->
    
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-6 group " style="margin-top: 390px;">
                    <!-- <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 350px; ">
                        <button class="btn btn-primary" style="margin-bottom: 30px; width:350px; height:50px" type="button">Button</button>
                        <button class="btn btn-primary" style="width:350px; height:50px" type="button">Button</button>
                      </div> -->


                    <div class="btn"><a href="AdminLogin.php" style="color: black; height: 50px;">
                        تسجيل الدخول للإدارة
                    </a></div>
		            <div class="btn"><a href="login.php" style="color: black; height: 50px;">
                        تسجيل الدخول للمُستخدم
                    </a></div>
		            <div class="btn"><a href="DoctorLogin.php" style="color: black; height: 50px;">
                        تسجيل الدخول للأطباء
                    </a></div>


                </div> <!-- End Col -->
                <div class="col-md">
                    <img src="images/welocome3.gif" alt="" width="500px" height="550px" style="margin-top: 150px; margin-left: 80px;">
                </div> <!-- End Col -->
            </div> <!-- End Row -->
        </div> <!-- End Container -->
    </div> <!-- End Welcome Div -->
    
    <!-- End Welcome Section -->

    <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>