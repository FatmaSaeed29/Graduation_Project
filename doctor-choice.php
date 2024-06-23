<?php

// require 'config.php';

// if(!empty($_SESSION["login"])){
//     header("Location: index.php");
//   }
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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,500;0,600;1,300;1,500;1,600&family=Big+Shoulders+Display:wght@700&family=El+Messiri:wght@400;500&family=Josefin+Sans:ital,wght@1,300;1,600&family=Kumbh+Sans:wght@400;700&family=Lalezar&family=Noto+Sans+Arabic:wght@300;400;500;600&family=Nunito&family=Open+Sans:ital,wght@0,400;0,500;0,600;1,300;1,400;1,500&family=Overpass:wght@300;600&family=Pacifico&family=Poppins:wght@400;500;600;700&family=Raleway:ital,wght@0,500;0,600;0,800;1,300;1,700&family=Rubik:wght@300;400;500&family=Ubuntu:ital,wght@0,400;0,500;1,700&display=swap');

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap");

    /* Start Welcome Section */

button {
    font-family: 'El Messiri', sans-serif;
    --c:  #229091; /* the color*/
    
    box-shadow: 0 0 0 .1em inset var(--c); 
    --_g: linear-gradient(var(--c) 0 0) no-repeat;
    background: 
      var(--_g) calc(var(--_p,0%) - 100%) 0%,
      var(--_g) calc(200% - var(--_p,0%)) 0%,
      var(--_g) calc(var(--_p,0%) - 100%) 100%,
      var(--_g) calc(200% - var(--_p,0%)) 100%;
    background-size: 50.5% calc(var(--_p,0%)/2 + .5%);
    outline-offset: .1em;
    transition: background-size .4s, background-position 0s .4s;
  }
  button:hover {
    --_p: 100%;
    transition: background-position .4s, background-size 0s;
  }
  button:active {
    box-shadow: 0 0 9e9q inset #0009; 
    background-color: var(--c);
    color: #fff;
  }
  
  
  button {
    font-family: 'El Messiri', sans-serif;
    /* font-size: 3.5rem; */
    cursor: pointer;
    padding: .1em .6em;
    font-weight: bold;  
    border: none;
  }

/* End Welcome Section */
</style>
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
                  if(empty($_SESSION["login"])){
                    echo "<a class='nav-link active' aria-current='page' href='logout.php' style='color: rgb(2, 2, 105); '> تسجيل خروج</a>";
                  }
                  else
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
                <div class="col-md-6  " style="margin-top: 390px;">
                    <a href="doctor-appointment.php"><button class="py-3 px-5 mx-5"> جدول مواعيد الحجز</button></a>
                    <a href="doctor-presc.php"><button class="py-3 px-5" style="--c:#E95A49"> جدول الروشتات </button></a>

                </div> <!-- End Col -->
                <div class="col-md">
                    <img src="images/doctor.gif" alt="" width="500px" height="500px" style="margin-top: 160px; margin-left: 40px; border-radius: 50%;">
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