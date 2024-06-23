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
  <link rel="stylesheet" href="css/hospital_search.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
  <title>الخدمات - التأمين الصحي الشامل</title>
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
              <a class="nav-link active" aria-current="page" href="#" style="color: rgb(2, 2, 105); font-weight: bold;"> المساعدة</a>
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
        للحصول على أقرب مستشفى اكتب مدينتك هنا
    </h1>
</div> <!-- End Hospital Tiltle -->

<div class="search container mt-5"  dir="rtl">
    <input id="searchbar" onkeyup="search_animal()" type="text"
    name="search" placeholder="أبحث علي المستشفيات">


    <div class="accordion" id="accordionExample list">
      <div class="container" style="margin-top: 30px; display: block; width: 900px;margin-right: -260px;">
      <div class="accordion-item animals ">
      <input type="radio" class="accordion" name="accordion" id="cb1" style="margin-left:1100px; "/>
      <section class="box" dir="rtl" >
        <label class="box-title" for="cb1" style="margin-right: 20px;"> المستشفى الكويتى التخصصى </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;"> ش عمر بن الخطاب, بجوار مستشفى التأمين الصحى, بنها, القليوبية
          <br>
          التليفون:
          <a href="tel:0133236047" style="text-decoration: none; margin-right: 20px; ">    0133236047 -</a>
          <a href="tel:0133236091" style="text-decoration: none;margin-right: 20px;" >    0133236091 -</a>
          <a href="tel:0133236092" style="text-decoration: none; margin-right: 20px;" >    0133236092 </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/sR1d9QGp6iKZLwr3A" target="_blank" style="text-decoration: none;margin-right: 20px;">
            https://goo.gl/maps/sR1d9QGp6iKZLwr3A
          </a>
        </div> <!-- End box-content  -->
      </section> 
    </div> <!-- End #accordionExample -->

    <!-- ********************************************************************************************* -->
      
    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb2" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb2" style="margin-right: 20px;">  عيادة الخانكة الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;">مساكن الايواء ,الخانكة, بنها,القليوبية
          <br>
          التليفون:
          <a href="tel:0244693949" style="text-decoration: none; margin-right: 20px;" >    0244693949 -</a>
          <a href="tel:0244690272" style="text-decoration: none; margin-right: 20px;" >    0244690272 </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/9zetU3zaKTdNzK8A8" target="_blank" style="text-decoration: none;margin-right: 20px;">
            https://goo.gl/maps/9zetU3zaKTdNzK8A8
          </a>
        </div> <!-- End box-content  -->  
      </section>
    </div>   <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb3" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb3" style="margin-right: 20px;">عيادة العبور الشاملة </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;">شارع متولي الشعراوي, الخانكة , بنها,القليوبية
          <br>
          التليفون:
          <a href="tel:0244793848" style="text-decoration: none;margin-right: 20px;" >    0244793848
          </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/2ksXq8BqNGxdo7iT8" target="_blank" style="text-decoration: none;margin-right: 20px;">
            https://goo.gl/maps/2ksXq8BqNGxdo7iT8
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb4" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb4" style="margin-right: 20px;"> عيادة القناطر الخيرية الشاملة </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"style="margin-right: 20px;">التقسيم السياحي, القناطر الخيرية, بنها,القليوبيه
          <br>
          التليفون:
          <a href="tel:0242186071" style="text-decoration: none;" >   0242186071 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/vZYmcmDtMxjaqPM48" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/vZYmcmDtMxjaqPM48
          </a>
        </div> <!-- box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->
  
    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb5" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb5" style="margin-right: 20px;">عيادة النيل الشاملة </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">ميدان المؤسسة - شبرا الخيمة - بنها - القليوبية
          <br>
          التليفون:
          <a href="tel:0244441948" style="text-decoration: none;" >   0244441948 </a>
          <a href="tel:0244469381" style="text-decoration: none;" >   0244469381 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/GaR4yZzGDydpnu9L7" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/GaR4yZzGDydpnu9L7
          </a>
        </div> <!-- End box-content -->
      </section>
    </div>  <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->
    
    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb6" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb6" style="margin-right: 20px;">عيادة بنها الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">ش فريد ندا بنها - القليوبية 
          <br>
          قريب من: امام مستشفى الاطفال التخصصى ببنها
          <br>
          التليفون:
          <a href="tel:0133233402" style="text-decoration: none;" >   0133233402 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/cqsjPUWKhqrXTeoA9" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/cqsjPUWKhqrXTeoA9
          </a>
        </div><!-- box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->
  
    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb7" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb7"style="margin-right: 20px;" >عيادة بهتيم الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">بهتيم -  بنها - القليوبية 
          <br>
          قريب من: بجوار كريستال عصفور
          <br>
          التليفون:
          <a href="tel:0248265351" style="text-decoration: none;" >   0248265351 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/HbQczkySWDm1oCzA7" target="_blank" style="text-decoration: none;">
            hhttps://goo.gl/maps/HbQczkySWDm1oCzA7
          </a>
        </div> <!-- box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb8" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb8" style="margin-right: 20px;">عيادة شبين القناطر الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"> طريق منيا القمح تقاطع طريق بنها شبين القناطر - القليوبية
          <br>
          قريب من: داخل مستشفى شبين القناطر المركزى
          <br>
          التليفون:
          <a href="tel: 0132721143" style="text-decoration: none;" >    0132721143 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/ymE3GyRUqHbTP6By6" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/ymE3GyRUqHbTP6By6
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb9" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb9" style="margin-right: 20px;">عيادة طوخ الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">ش احمد بن عبد العزيز - طوخ - بنها - القليوبيه
          <br>
          قريب من: بجوار مستشفى طوخ المركزى
          <br>
          التليفون:
          <a href="tel: 0132479614" style="text-decoration: none;" >    0132479614 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/ymE3GyRUqHbTP6By6" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/ymE3GyRUqHbTP6By6
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb10" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb10" style="margin-right: 20px;">عيادة قليوب الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">قليوب - بنها - القليوبية
          <br>
          قريب من: خلف مستشفى قليوب المركزى
          <br>
          التليفون:
          <a href="tel: 0242130102" style="text-decoration: none;" >    0242130102 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/ymE3GyRUqHbTP6By6" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/ymE3GyRUqHbTP6By6
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb11" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb11" style="margin-right: 20px;">  عيادة كفر شكر الشاملة</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">ش طراد النيل كفر شكر - بنها - القليوبية
          <br>
          قريب من: داخل مستشفى كفر شكر المركزى
          <br>
          التليفون:
          <a href="tel: 0132517007" style="text-decoration: none;" >    0132517007 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/zPU2dLGZ4cAyabn48" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/zPU2dLGZ4cAyabn48
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb12" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb12" style="margin-right: 20px;"> مستشفى بنها للتأمين الصحى
        </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">شارع الاستاد - بنها - القليوبيه - مصر
          <br>
          التليفون:
          <a href="tel: 0133230576" style="text-decoration: none;" >    0133230576 </a>
          <a href="tel: 0133233402" style="text-decoration: none;" >    0133233402 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/6eY3PXADCJL7Jb5w8" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/6eY3PXADCJL7Jb5w8
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb13" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb13" style="margin-right: 20px;"> مستشفى هليوبوليس </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"> 3 ش حامد باشا مصر الجديدة                      
          <br>
          التليفون:
          <a href="tel: 26343495" style="text-decoration: none;" >    26343495 - </a>
          <a href="tel: 26374633" style="text-decoration: none;" >    26374633 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/yzovQQFAxNdXzuss6?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/yzovQQFAxNdXzuss6?coh=178573&entry=tt
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb14" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb14" style="margin-right: 20px;">مستشفى الإصلاح الاسلامى </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"> 18 ش جزيرة بدران شبرا                                            
          <br>
          التليفون:
          <a href="tel: 25768556" style="text-decoration: none;" >    25768556 - </a>
          <a href="tel: 25778274" style="text-decoration: none;" >    25778274 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/pGA1G55dJ1o4TWuZ9?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/pGA1G55dJ1o4TWuZ9?coh=178573&entry=tt
          </a>
        </div> <!-- End "box-content -->
      </section>
    </div> <!-- End accordion-item -->
    
    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb15" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb15" style="margin-right: 20px;">مستشفى القبطي     </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content"> 175 رمسيس وسط البلد القاهرة                                                                   
          <br>
          التليفون:
          <a href="tel: 25899870" style="text-decoration: none;" >    25899870 - </a>
          <a href="tel: 25899869" style="text-decoration: none;" >    25899869 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/ZdeQ6ap4CNiDyo7QA?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/ZdeQ6ap4CNiDyo7QA?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb16" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb16" style="margin-right: 20px;">مستشفى مبرة مصر القديمة </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">37 ش أبى سفيان مصر القديمة القاهرة                                                                           
          <br>
          التليفون:
          <a href="tel: 23625680" style="text-decoration: none;" >    23625680 - </a>
          <a href="tel: 23639197" style="text-decoration: none;" >    23639197 </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/8PQpKvbRFon9kiRd7?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/8PQpKvbRFon9kiRd7?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb17" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb17" style="margin-right: 20px;">مستشفى مبرة المعادى</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">6 ش سكانات المعادى القاهرة                                                                                       
          <br>
          التليفون:
          <a href="tel: 23584873" style="text-decoration: none;" >    23584873  </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/iPdfeBWkhEFauHS66?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/iPdfeBWkhEFauHS66?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb18" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb18" style="margin-right: 20px;">معهد ناصر</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">135 كورنيش النيل أغاخان شبرا القاهرة                 
          <br>
          التليفون:
          <a href="tel: 22026771" style="text-decoration: none;" >    22026771 - </a>
          <a href="tel: 22024149" style="text-decoration: none;" >    22024149  </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/VfPijHqCmYCgG4W57?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/VfPijHqCmYCgG4W57?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb19" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb19" style="margin-right: 20px;">مستشفى الشيخ زايد التخصصي</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">مدينة الشيخ زايد محور 6 أكتوبر القاهرة                  
          <br>
          التليفون:
          <a href="tel: 38500921" style="text-decoration: none;" >    38500921 - </a>
          <a href="tel: 38500927" style="text-decoration: none;" >    38500927  </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/s9As1eV7i5VuhGtH6?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/s9As1eV7i5VuhGtH6?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb20" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb20" style="margin-right: 20px;">مستشفى الهلال</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">  34 ش رمسيس القاهرة                                             
          <br>
          التليفون:
          <a href="tel: 25750179" style="text-decoration: none;" >    25750179 - </a>
          <a href="tel: 25750174" style="text-decoration: none;" >    25750174  </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/uFh4zSqhJpKogiNE8?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/uFh4zSqhJpKogiNE8?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb21" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb21" style="margin-right: 20px;">مستشفى دار الشفا</label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">375 ش رمسيس العباسية القاهرة <br>                                            
          <br>
          التليفون:
          <a href="tel: 24845421" style="text-decoration: none;" >    24845421  </a>
          <br>
          <span>رابط العنوان :</span>
          <a href="https://goo.gl/maps/zA5dyRn4VVLCDN6E8?coh=178573&entry=tt" target="_blank" style="text-decoration: none;">
            https://goo.gl/maps/zA5dyRn4VVLCDN6E8?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb22" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb22" style="margin-right: 20px;"> مستشفى الشيخ زايد إل نهيان  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">منشية ناصر مزلقان الدويقة بجوار المقاولون العرب القاهرة      <br>                                            
          <br>
          التليفون:
          <a href="tel: 23388602" style="text-decoration: none;" >    23388602  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/Nsvs7kzzvsCJetNq5?coh=178573&entry=tt" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/Nsvs7kzzvsCJetNq5?coh=178573&entry=tt
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb23" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb23" style="margin-right: 20px;"> مجمع الأقصر الطبي الدولي  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">مدينة الأقصر، الأقصر، مصر      <br>                                            
          <br>
          التليفون:
          <a href="tel: 0952277194" style="text-decoration: none;" >    0952277194  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/1e9GBywc34MfKke37" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/1e9GBywc34MfKke37
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb24" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb24" style="margin-right: 20px;"> مستشفى إيزيس التخصصي للنساء والولادة  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">شارع المصالح الحكومية، البياضية، الأقصر      <br>                                            
          <br>
          التليفون:
          <a href="tel: 095 2300039" style="text-decoration: none;" >    095 2300039  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/eDZDGupzkp2FKtPY7" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/eDZDGupzkp2FKtPY7
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb25" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb25" style="margin-right: 20px;"> مستشفي العديسات التخصصي للأطفال  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">مدينة الطود، الأقصر، مصر      <br>                                            
          <br>
          التليفون:
          <a href="tel:  095 2430006" style="text-decoration: none;" >     095 2430006  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/Z3K8K7zthrJWh7Qo6" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/Z3K8K7zthrJWh7Qo6
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb26" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb26" style="margin-right: 20px;"> مستشفى الكرنك الدولي  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">كورنيش النيل - كرنك - الأقصر      <br>                                            
          <br>
          التليفون:
          <a href="tel:  095 2372025" style="text-decoration: none;" >     095 2372025  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/YCku63WPFTmJb2E5A" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/YCku63WPFTmJb2E5A
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals">
      <input type="radio" class="accordion" name="accordion" id="cb27" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb27" style="margin-right: 20px;"> مستشفى حورس التخصصي  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">مدينة أرمنت، الأقصر، مصر      <br>                                            
          <br>
          التليفون:
          <a href="tel:  0111 232 4259" style="text-decoration: none;" >     0111 232 4259  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/aZJ3GyLwE1BSBjnw9" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/aZJ3GyLwE1BSBjnw9
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

    <!-- ********************************************************************************************* -->

    <div class="accordion-item animals" style = "margin-bottom:25px;">
      <input type="radio" class="accordion" name="accordion" id="cb28" style="margin-left:1100px;"/>
      <section class="box" dir="rtl">
        <label class="box-title" for="cb28" style="margin-right: 20px;"> مستشفى طيبة التخصصي  </label>
        <label class="box-close" for="acc-close"></label>
        <div class="box-content">مدينة إسنا، الأقصر، مصر.      <br>                                            
          <br>
          التليفون:
          <a href="tel:  040 3270273" style="text-decoration: none;" >     040 3270273  </a>
          <br>
          <span style="margin-right: 20px;">رابط العنوان :</span>
          <a href="https://goo.gl/maps/vC4oFjE8ATbcT1ZY9" target="_blank" style="text-decoration: none;margin-right: 20px;">
          https://goo.gl/maps/vC4oFjE8ATbcT1ZY9
          </a>
        </div> <!-- End box-content -->
      </section>
    </div> <!-- End accordion-item -->

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