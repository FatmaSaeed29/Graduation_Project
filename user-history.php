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
  <link rel="stylesheet" href="css/user-history.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
  <title>السجل المرضي - التأمين الصحي الشامل</title>
</head>
<style>

nav .nav-ul{
    margin-left: 300px;
}

  /* Footer */

footer {
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
    background: #000;
    margin-bottom: -200px;
}
.footer{
  width:1000px !important;
}
.socail{
  width:400px;
}
/* .socail a{
  width:400px;
} */

/* Footer */
</style>
<body>

  <!-- Navbar Section -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">

    <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul">
        <div class="nav-menu">


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <li>
              <a class="navbar-brand active" href="index.php" style="color: rgb(2, 2, 105); ">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="about-us.php" style="color: rgb(2, 2, 105);">معلومات عنا</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgb(2, 2, 105); margin-right: 10px; ">
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
              <a class="nav-link active" aria-current="page" href="#" style="color: rgb(2, 2, 105); "> المساعدة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-4" aria-current="page" href="contact_us.php" style="color: rgb(2, 2, 105); "> تواصل معنا</a>
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
  <!-- end navbar-->

    <!-- Start hospital Search Section -->
    <div class="hospital-content">

<div class="hospital-title2">
    <h1 class="text-center font-weight-bold" style="margin-top:-90px;">
        السجل المرضي
    </h1>
</div> <!-- End Hospital Tiltle -->

<div class="search container mt-5"  dir="rtl">
    <!-- <input id="searchbar" onkeyup="search_animal()" type="text"
    name="search" placeholder="أبحث علي المستشفيات"> -->


    <div class="accordion" id="accordionExample list">
      <div class="container" style="margin-top: 30px; display: block; width: 900px;margin-right: -260px;">
      <div class="accordion-item animals ">
      <input type="radio" class="accordion" name="accordion" id="cb1" style="margin-left:1100px; "/>
      <section class="box" dir="rtl" >
        <label class="box-title" for="cb1" style="margin-right: 20px;"> التطعيمات </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;"> 

          <?php 
            $i=1;
            foreach ($vaccines as $row) {
            echo "<p>  اسم التطعيم :
            ".$row['vaccine_name']."                           
            </p>";
            echo "<p>  تاريخ التطعيم :
            ".$row['vaccine_date']."                           
            </p>";
            echo"<hr>";
            }
            

            
            
            $i++;
          ?>
          <!-- <br> -->
          
          
        </div> <!-- End box-content  -->
      </section> 
    </div> <!-- End #accordionExample -->

    <!-- ********************************************************************************************* -->
      
    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb2" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb2" style="margin-right: 20px;">  بيانات حجز الكشف</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;">

        <?php 
            $i=1;
            foreach ($appointments as $row) {
            echo "<p>  نوع الكشف :
            ".$row['category']."                           
            </p>";
            echo "<p>  تاريخ الحجز :
            ".$row['date']."                           
            </p>";
            echo"<hr>";
            }
            

            
            
            $i++;
          ?>
        
        </div> <!-- End box-content  -->  
      </section>
    </div>   <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb3" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb3" style="margin-right: 20px;">بيانات العمليات الجراحية </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;">
        
        <?php 
            $i=1;
            foreach ($operations as $row) {
            echo "<p>  اسم المستشفى :
            ".$row['hosptial_name']."                           
            </p>";
            echo "<p>  اسم الطبيب :
            ".$row['doctor_name']."                           
            </p>";
            echo "<p> نوع العملية :
            ".$row['operation_type']."                           
            </p>";
            echo"<hr>";
            }
            

            
            
            $i++;
          ?>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->


    <!-- ********************************************************************************************* -->

<input type="radio" name="accordion" id="acc-close" />
</div> <!-- End Search -->
<!-- End Hospital Section -->

        <!-- Start Footer Section -->

        <footer class="bg-light text-center text-white" style="margin-top:50px; ">
          <!-- Grid container -->
          <div class="container p-4 pb-0 footer">
            <!-- Section: Social media -->
            <section class="mb-0 socail" style="margin-bottom:-240px; padding-bottom:17px;">
              
            <!-- Linkedin -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/company/uhia/"
                role="button"
                target="_blank"
                ><i class="fab fa-linkedin-in"></i
                ></a>

                <!-- Youtube -->
                <a
                  class="btn text-white btn-floating m-1"
                  style="background-color: #dd4b39;"
                  href="https://www.youtube.com/@user-sf9ck5qs4h"
                  role="button"
                  target="_blank"
                  ><i class="fab fa-youtube"></i
                ></a>
              <!-- Facebook -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/UHIA.Egypt?paipv=0&eav=AfbGVfWXUHgPO1JozOPrqjdOid_t1bysXYZ4L_nTOIr_Sb-lRCf0ueAo36zHIISaNLU&_rdr"
                role="button"
                target="_blank"
                ><i class="fab fa-facebook-f"></i
                ></a>


        
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->


</footer>


    <!-- End Footer Section -->

  

    <script>
      function search_animal() {
        let input = document.getElementById('searchbar').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('animals');
        
        for (i = 0; i < x.length; i++) {
          if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";				
          }
        }
      }

    </script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>