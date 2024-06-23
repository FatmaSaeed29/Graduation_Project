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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <title>الصفحة الرئيسية - التأمين الصحي الشامل</title>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .services .service_content .services_items{
    display: flex;
    margin-right:-100px;
    align-items: center;
    text-align: center;
    margin-top: 40px;
}
 .services{
    margin: 150px auto;
} 
</style>
<body>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 330px" >
            <div class="nav-menu">
                
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <li>
                    <a class="navbar-brand active " href="#" style="color: rgb(2, 2, 105); font-weight: bold;" >الصفحة الرئيسية</a>
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

    <!-- Start carousal section-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 0"></button> -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item plus active" style="margin-top: 50px;">
                    <img src="images/22.jpg" class="d-block w-100" alt="Slider1" height="600px">
                    <!-- <h3>
                        hello
                    </h3> -->
                </div>
                <!-- <div class="carousel-item" style="margin-top: 50px;">
                    <img src="images/health_insurance_plans_1684479259584_1684479259730.avif" class="d-block w-100" alt="..." height="600px" >
                </div> -->
                <div class="carousel-item" style="margin-top: 50px;">
                    <img src="images/slide2.gif" class="d-block w-100" alt="..." height="600px">
                </div>
                <div class="carousel-item" style="margin-top: 50px;">
                    <img src="images/healthjpg.jpg" class="d-block w-100" alt="..." height="600px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="line"></div>
    <!-- End Carousal section-->

    <!-- Start Quotation Section -->

    <div class="quotaion" style="width: 100%; height: 450px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 left">
                    <h4>
                      هدفنا هو الحد من الأمراض و توفير الرعاية الصحية اللازمة لجميع أفراد المجتمع.
                    </h4>
                </div>
                <div class="col-md-6 col-12 right">
                    <img src="images/logo1.png" alt="Logo" height="300px" width="250px" >
                </div>
            </div>
        </div>
    </div>

    <!-- End Quotation Section -->

    <!-- Start Modal Section -->

    <!-- <button type="button" class="btn btn-outline-danger">Danger</button> -->
    <div class="modal-one" style="width: 100%;">
        <div class="container">
            <div class = "right">
                <h4>مزايا نظام التأمين الصحي الشامل</h4>
            </div><br>

            <!-- Button trigger modal -->
            <div class = "left">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style = "font-size: 25px; font-weight: bold;">
                    التفاصيل
                </button>
            </div>
  
  <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="direction: rtl;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">مزايا نظام التأمين الصحي الشامل</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 0px;"></button>
                    </div>
                    <div class="modal-body">
                    <ul dir="rtl" class="my-5 mx-5 text-end lh-lg">
                        <li class="mb-3">
                            يقدم نظام التأمين الصحي الشامل خدمات صحية أولية، وخدمات علاجية وتشخيصية، وخدمات الصحة الإنجابية، والاسعافات الأولية لحالات الطوارئ.
                        </li>
                        <li class="mb-3">
                            تتحمل الدولة تكاليف علاج وإشتراكات الغير قادرين وبتعفيهم من المساهمات في العلاج.
                        </li>
                        <li class="mb-3">
                             تكون جميع العمليات مجانا لجميع المواطنين فيما عدا العمليات التجميلية
                        </li>
                        <li class="mb-3">
                            للمواطن حق إسترداد تكاليف علاجه خارج الجهات المتعاقدة مع الهيئة في الحالات الطارئة فقط.
                        </li>
                        <li>
                            سينتفع المواطنون بالخدمات في نظام التأمين الصحي الشامل بمجرد تطبيقه في محافظتهم 
                        </li>
    
                    </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End Modal Section -->

<!-- Start How To Get Service Section -->

<div class="services "  >
    <div class="service_content">
        <div class="container">
            <h1 class="text-center mt-5 mb-5" style="color: rgb(167, 35, 2);">نبذة عن الخدمات المتوفرة</h1>
            <div class="services_items" style="margin-left:90px;">
                <div class="service-one">
                    <div class="circle">
                        <div class="border" ></div>
                        <i class="far fa-hospital icon"></i>
                    </div>
                    <h4>دخول المستشفى</h4>
                    <!-- <p>
                        وفي حالة إحتياج دخول المستشفى سيقوم الإستشاري بتحويلك لتلقي العلاج المناسب
                    </p> -->
                </div>
                <div class="service-one">
                    <div class="circle">
                        <div class="border"></div>
                        <i class="fas fa-user-md icon"></i>
                    </div>
                    <h4>فحص إستشاري</h4>
                    <!-- <p>
                        إذا إستدعيت الحالة سيتم تحويلك إلى أخصائي أو إستشاري لتشخيص حالتك وصرف العلاج المناسب
                    </p> -->
                </div>
                <div class="service-one">
                    <div class="circle">
                        <div class="border"></div>
                        <i class="fas fa-stethoscope icon"></i>
                    </div>
                    <h4>الفحص والعلاج المبدأي</h4>
                    <!-- <p>
                        سيتم الكشف عليك من خلال طبيب الأسرة وسيقدم لك خدمة الرعاية الأولية بالإضافة إلى الإشعة والتحاليل والأدوية
                    </p> -->
                </div>
                <div class="service-one" style=" width: 216px;">
                    <div class="circle">
                        <div class="border"></div>
                        <i class="fas fa-phone-alt icon"></i>
                    </div>
                    <h4>فحص طبيب الأسرة</h4>
                    <!-- <p>
                        تصل على 15344 لحجز موعد مع طبيب الأسرة في حالة الإحتياح للكشف
                    </p> -->
                </div>
                <div class="service-one service_special" style="border: none; width: 216px;">
                    <div class="circle">
                        <div class="border"></div>
                        <i class="fas fa-link icon"></i>
                    </div>
                    <h4>الربط مع طبيب الأسرة</h4>
                    <!-- <p>
                        بعد التسجيل في وحدة الرعاية الأولية التابعة لك سيتم ربطك أنت والعائلة على طبيب الأسرة
                    </p> -->
                </div>
            </div> <!-- services_items -->
            <!-- <hr style="margin-top: 60px;"> -->
        </div> <!-- container -->
    </div> <!-- service_content -->


<!-- End How To Get Service Section -->



    <!-- Start contact us section -->
    <div class="contact-us mb-5" id="contact">
    <div class="container" >
        <h1 class="text-center mt-5" style="color: rgb(167, 35, 2);">إتصل بنا </h1>
        <div class="row">
            <div class="col-md-6 col-12 left mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.9271271200405!2d31.185577514309333!3d30.46650210546728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df59565d98b5%3A0x3dc27f7bd05dc1b2!2z2KfZhNiq2KPZhdmK2YYg2KfZhNi12K3ZiiDZgdix2Lkg2KfZhNmC2YTZitmI2KjZitip!5e0!3m2!1sen!2seg!4v1675521139098!5m2!1sen!2seg" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 col-12 right">
                <div class="address">
                    <i class="fas fa-map-marker-alt" style="font-size: 40px;"></i>
                    <br>
                    <h4 class="mx-3" style="margin-top: 5px;">العنوان</h4>
                    <p style="margin-top: 45px; margin-right: -85px;">شارع الإستاد بنها , القليوبية بجوار مستشفى بنها التعليمي</p>
                </div>
                <div class="address">
                    <i class="fas fa-phone" style="font-size: 40px;"></i>
                    <br>
                    <h4 class="mx-3" style="margin-top: 5px;">التليفون</h4>
                    <p style="margin-top: 45px; margin-right: -85px;">
                    <span>
                        <a href="tel:013-3230576" style="text-decoration: none; color:rgb(2, 2, 105);">
                            <span>013-3230576 - </span>
                        </a>
                    </span>
                    <span>
                        <a href="tel:013-3233401" style="text-decoration: none; color:rgb(2, 2, 105);">
                            <span>013-3233401 - </span>
                        </a>
                    </span>
                    <span>
                        <a href="tel:013-3233402" style="text-decoration: none; color:rgb(2, 2, 105);">
                            <span>013-3233402 - </span>
                        </a>
                    </span>
                    <span>
                        <a href="tel:013-3233403" style="text-decoration: none; color:rgb(2, 2, 105);">
                            <span>013-3233403  </span>
                        </a>
                    </span>
                    </p>
                </div>
                <div class="address">
                    <i class="far fa-envelope-open-text" style="font-size: 40px;"></i>
                    <br>
                    <h4 class="mx-3" style=" margin-top:5px;" >البريد الالكتروني</h4>
                    <!-- <p style="margin-top: 45px; margin-right: -170px;">info@benha.gov.eg</p> -->
                    <p>
                        <!-- <a class="email" href="info@benha.gov.eg" style="margin-top: 65px;">info@benha.gov.eg</a> -->
                        <!-- <input type="email" value="info@benha.gov.eg"> -->
                        <a href = "mailto: info@benha.gov.eg" class="email">info@benha.gov.eg</a>
                    </p>
                </div>
                <div class="address">
                    <i class="far fa-phone-office" style="font-size: 40px;"></i>
                    <br>
                    <h4 class="mx-3" style="margin-top: 5px;">الخط الساخن</h4>
                    <a href="tel:15344" style="text-decoration: none;">
                        <p style="margin-top: 45px; margin-right: -140px;">15344</p>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
    <!-- End contact us section -->

    <!-- Start Footer Section -->

    <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4 socail" style="margin-bottom:-200px;">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/UHIA.Egypt?paipv=0&eav=AfbGVfWXUHgPO1JozOPrqjdOid_t1bysXYZ4L_nTOIr_Sb-lRCf0ueAo36zHIISaNLU&_rdr"
        role="button"
        target="_blank"
        ><i class="fab fa-facebook-f"></i
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

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="https://www.linkedin.com/company/uhia/"
        role="button"
        target="_blank"
        ><i class="fab fa-linkedin-in"></i
      ></a>
 
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


</footer>


    <!-- End Footer Section -->

    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="fas fa-long-arrow-up"></i>
    </a>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>