<?php 
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/contact_us.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
  <title>الخدمات - التأمين الصحي الشامل</title>
</head>

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
              <a class="nav-link active" aria-current="page" href="help.php" style="color: rgb(2, 2, 105);"> المساعدة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active mx-4" aria-current="page" href="contact_us.php" style="color: rgb(2, 2, 105); font-weight: bold;"> تواصل معنا</a>
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

  <!-- Start Contact Us Section -->

  <div class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/contact_us.jpg" style="width : 550p ; height : 500px ; margin-top: 85px; margin-left:-40px;" alt="">

            </div>
            <div class="col">
                <div class="contact_text" style="margin-top: 185px ; text-align: center;">
                    <h2> 
                        للتواصل معنا
                    </h2>
                    <p class="mt-4">
                        نحن هنا للرد علي مكالماتك ورسائلك ولاي استفسارات بسرعة قدر الإمكان وذلك من خلال بعض وسائل التواصل الموجودة بالأسفل
                    </p>
                    <div style="width: 60%; display: block ; margin: auto; margin-top: 25px;height: 3px ; background-color:rgb(175, 160, 160); margin-bottom: 20px;">
                        <br>
                        <!-- <p class="mt-3 "> -->
                            <div class="social "  >
                                <div class="social-item  " >
                                    <span  style="font-weight: bold; ">التليفون :  </span>
                                    <a href="tel:01206935427" style="text-decoration: none;" >01206935427</a>
                                </div>
                                <br>
                                <div class="social-item  " >
                                    <span style="font-weight: bold;">الموقع :  </span>
                                    شارع الإستاد بنها , القليوبية بجوار مستشفى بنها التعليمي
                                </div>
                                <br>
                                <div class="social-item  " >
                                    <a href = "mailto: info@benha.gov.eg" style="text-decoration: none;" class="email">info@benha.gov.eg</a> 
                                    <span style="font-weight: bold;">
                                        : البريد الإلكتروني
                                    </span>
                                </div>
                                <br>
                                <div class="social-item  " >
                                    <span style="font-weight: bold;">عدد ساعات العمل :  </span>
                                    جميع أيام الإسبوع من الساعة الثامنة صباحا إلى الثانية مساءا
                                </div>
                               

                            </div>
                        <!-- </p> -->
                    </div>
                </div> <!-- End Contact_Text-->
                
            </div> <!--  End Col -->
        </div> <!-- End Row -->
    </div> <!-- End Container -->
  </div> <!-- End Contact Us Section -->

  <!-- End Contact Us Section -->

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

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>