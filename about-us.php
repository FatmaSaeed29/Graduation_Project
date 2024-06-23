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
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <title>معلومات عنا - التأمين الصحي الشامل </title>
</head>
<body>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style= "margin-left: 310px;">
            <div class="nav-menu">
                
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <li>
                    <a class="navbar-brand active" href="index.php" style="color: rgb(2, 2, 105); " >الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="#" style="color: rgb(2, 2, 105);  font-weight: bold;">معلومات عنا</a>
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

    <!-- Start About Us Section -->

    <div class="about-us">
        <div class="backgroud">
            <div class="container">
                <div class="content" >
                    <img src="images/UHI.jpg" alt="UHI" height="550px" width="900px" class="uhi">
                    <div class="info" style="margin-left:100px;">
                        <h4 class="my-5 info-title ">
                            الهيئة العامة للتأمين الصحي الشامل ببنها
                        </h4>
                            <ol dir="rtl" style="list-style :inside;" class="text-end lh-lg">
                                <li style="font-size: 20px;" class="mb-4">
                                    هو نظام تكافلي اجتماعي تقدم من خلاله خدمات طبية ذات جودة عالية لجميع فئات المجتمع دون تمييز وتتكفل الدولة 
                                    <span style="margin-right: 27px;">  من خلاله بغير القادرين وتكون الأسرة هي وحدة التغطية.</span>
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    ويشمل النظام مجموعة متكاملة من الخدمات التشخيصية والعلاجية كما يتيح للمنتفع الحرية في اختيار مقدمي الخدمة 
                                    <span style="margin-right: 27px;">  الصحية بخلاف طبيب الأسرة . </span>
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    يكون التأمين مجانا  لدى الأطفال (الرضع) بداية من الولادة حتى السادسة من العمر و يشمل جميع التطعيمات .
                                    
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    و يكون التأمين لدى الطلاب بداية من الصف الأول الإبتدائي حتى الصف الثالث الثانوي بشرط الإلتزام بدفع مصاريف 
                                    <span style="margin-right: 27px;">   الدراسة ، بينما الطلاب الجامعيين يتم التأمين عليهم من خلال الجامعة.   </span>
                                   
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    في حالة الإنتهاء من الجامعة لا يكون لديه تأمين حتى يجد وظيفة فإذا كانت تتبع القطاع الخاص ، لابد أن يكون مؤمن 
                                    <span style="margin-right: 27px;"> عليه من قبل صاحب العمل .  </span>
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    أما عن أصحاب المعاشات فيكون لديهم الحق في التأمين و يشترط عليهم الذهاب كل عام إلى مقر التأمين لتجديد 
                                    <span style="margin-right: 27px;"> التأمين ان كانوا على قيد الحياة و الإلغاء في حالة الوفاة . </span>
                                    
                                </li>
                                <li style="font-size: 20px;" class="mb-4">
                                    <span style="color: rgb(167, 35, 2); font-weight: bold;">المكان :</span>
                                     <span style="color: rgb(167, 35, 2); ">شارع الإستاد ، بجوار مستشفى بنها التعليمي</span>
                                </li>
                            </ol>
                    </div>
                </div>
            </div>


            <div class="container carousel-content mb-5">
                <div class="row">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="images/card1.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/card2.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/card3.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/card4.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/card5.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                              <div class="carousel-item">
                                <img src="images/card6.jpeg" class="d-block w-100" alt="Card" height="550px">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div> <!-- col-6 -->
                    <div class="col text-center card-info">
                        <h5>
                             هذا مثال للبطاقة الصحية لنظام التأمين الصحي الورقي الذي نقوم بتسهيل العمليات الخاصة به من خلال الخدمات التي نوفرها في هذا الموقع
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About Us Section -->

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
    
    <script src="js/company.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>