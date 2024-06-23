<?php

require 'config.php';
if(empty($_SESSION["userId"])){
    header("Location: login.php");
  }
$myID= $_SESSION["userId"];

  $vaccine = mysqli_query($conn, "SELECT * FROM vaccine where user_id= $myID");
  $vaccines = $vaccine -> fetch_all(MYSQLI_ASSOC);

  $registeration = mysqli_query($conn, "SELECT * FROM registeration where national_ID= $myID");
  $registerations = $registeration -> fetch_all(MYSQLI_ASSOC);

  $operation = mysqli_query($conn, "SELECT * FROM operation where user_id= $myID");
  $operations = $operation -> fetch_all(MYSQLI_ASSOC);
  
  $appointment = mysqli_query($conn, "SELECT * FROM appointment where user_id= $myID");
  $appointments = $appointment -> fetch_all(MYSQLI_ASSOC);

  $company = mysqli_query($conn, "SELECT * FROM company where user_id= $myID");
  $companys = $company -> fetch_all(MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/user_profile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <title>الصفحة الرئيسية - التأمين الصحي الشامل</title>
</head>
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
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
                    <a class="navbar-brand active " href="index.php" style="color: rgb(2, 2, 105); " >الصفحة الرئيسية</a>
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

            <!-- <a href="user_profile.php" class="profile"> <img src="images/profile1.png" style = "position: absolute; width: 70px;
                top: 18px; right: 1410px;"></a> -->
            

            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo">
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->

    <!-- Start User Profile Section -->


    <!--start cards-->
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body p-4" dir="rtl">

                      <h6>
                        البيانات الشخصية
                      </h6>
                      <hr class="mt-0 mb-4">

                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>الرقم القومي</h6>
                            <?php 
                                $i=1;
                                foreach ($registerations as $row) {
                                echo "<p>  
                                ".$row['national_ID']."                           
                                </p>";
                                }
                            ?>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>رقم الهاتف</h6>
                          <?php 
                                $i=1;
                                foreach ($registerations as $row) {
                                echo "<p>  
                                ".$row['phone']."                           
                                </p>";
                                }
                            ?>
                        </div>
                      </div> <!-- End Row -->

                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6> الوظيفة</h6>
                          <?php 
                                $i=1;
                                foreach ($registerations as $row) {
                                echo "<p>  
                                ".$row['job']."                           
                                </p>";
                                }
                            ?>
                        </div>
                        <div class="col-6 mb-3">
                          <h6> تاريخ الميلاد</h6>
                          <?php 
                                $i=1;
                                foreach ($registerations as $row) {
                                echo "<p>  
                                ".$row['birthdate']."                           
                                </p>";
                                }
                            ?>
                        </div>
                      </div> <!-- End Row -->

                      <hr class="mt-0 mb-4">
                      
                        <h6>
                        للإنتقال الى السجل المرضي 
                        </h6>
                        <a class="btn btn-outline-primary" href="user-history.php" role="button">إضغط هنا</a>
                    </div> <!-- End card-body -->
                  </div> <!-- End col-md-8 -->

                  <div class="col-md-4 gradient-custom text-center text-dark"
                    style="border-top-right-radius: .5rem; border-bottom-right-radius: .5rem;">
                    <img src="images/user.png"
                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <?php 
                        $i=1;
                        foreach ($registerations as $row) {
                        echo "<h5> أهلًا بك 
                        ".$row['name']."                           
                        </h5>";
                        }
                    ?>
                  </div>
                </div> <!-- End Second Row -->
              </div> <!-- End card -->
            </div> <!-- End First col (col-lg-6) -->
          </div> <!-- End first Row -->
        </div> <!-- End container -->
      </section> <!-- End Section -->

<!--end cards-->

    <!-- End User Profile Section -->


    <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>