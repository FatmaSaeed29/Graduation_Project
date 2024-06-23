<?php
require 'config.php';

if (empty($_SESSION["userId"])) {
    header("Location: login.php");
}
if (isset($_POST["submit"])) {
    $hospital_name          = $_POST["hospital_name"];
    $doctor_name            = $_POST["doctor_name"];
    $operation              = $_POST["operation"];
    $health_status          = $_POST["health_status"];
    $userId                 = $_SESSION["userId"];
    $sql1                   = "INSERT INTO operation VALUES('', '$userId' ,'$hospital_name','$doctor_name','$operation','$health_status' )";

    if (!mysqli_query($conn, $sql1)) {
        "<script>alert ('Registration Successfully Done'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
    header("refresh:0; url=Operation_Done.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/operation.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>الخدمات - التأمين الصحي الشامل</title>
</head>
<style>
    body{
        overflow-y: hidden;
    }
    .container1 .operation_form
    {
        text-align: center;
        width: 60%;
        height: 400px;
        position: absolute;
        top:54%;
        left: 50%;
        transform: translate(-50% , -50%);
        background-color:rgba(52, 214, 243, 0.6);
        color:rgb(235, 230, 230);
    
    }
.container1 .operation_form h2
    {
        color: rgb(2, 2, 105);
        margin-top: 60px !important;
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

        <!-- start operation form -->

        <div class="container1" style="background-image: url(images/operation.jpg); background-size: cover; ">
            
            
                <div class="rgba">
                <div class = "operation_form">
                    <h2 class="mt-4">تسجيل العمليات الجراحيه</h2>
                    
                        <form action="" method="POST">
                            

                            <div class="input-group mb-3 right" >
                                <input type="text" name="hospital_name" class="form-control" placeholder="اسم المستشفى" aria-describedby="basic-addon1" style = "direction: rtl;" required>
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-hospital" style="width: 35px; color: rgb(2, 2, 105)"></i></span>
                            </div>

                            <div class="input-group mb-3 left" >
                                <input type="text" name="doctor_name" class="form-control" placeholder="اسم الدكتور" aria-describedby="basic-addon1" style = "direction: rtl;" required>
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-md" style="width: 35px; color: rgb(2, 2, 105)"></i></span>
                            </div>

                            <div class="input-group mb-3 right" >
                                    <select class="form-select" name="operation" aria-label="Default select example" 
                                    style="direction: rtl;" dir="rtl" required>
                                        <option selected disabled> نوع العملية </option>
                                        <option value="عمليات الأورام"> عمليات الأورام </option>
                                        <option value="عمليات الغسيل الكلي"> عمليات الغسيل الكلى </option>
                                        <option value="عمليات زراعة الأعضاء"> عمليات زراعة الأعضاء </option>
                                        <option value="عمليات القسطرة"> عمليات القسطرة </option>
                                        <option value="عمليات النخاع الشوكى"> عمليات النخاع الشوكي </option>
                                        <option value="عمليات القلب"> عمليات القلب </option>
                                        <option value="جراحات العيون "> جراحات العيون  </option>
                                        <option value="جراحات الأنف و الأذن"> جراحات الأنف و الأذن </option>
                                        <option value="عمليات الأجهوة التعويضية"> عمليات الأجهوة التعويضية </option>
                                    </select>
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-clipboard-list" style="width: 35px; color: rgb(2, 2, 105) "></i></span>
                            </div>

                            <div class="input-group mb-3 left" >
                                <select class="form-select" name="health_status" aria-label="Default select example" 
                                    style="direction: rtl;" dir="rtl"  required>
                                        <option selected disabled> تعاني من أمراض مزمنة ؟ </option>
                                        <option value="نعم"> نعم </option>
                                        <option value="لا">  لا </option>
                                </select>
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-hospital-user" style="width: 35px; color: rgb(2, 2, 105)"></i></span>
                            </div>

                           

                            

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="submit" >تسجيل</button>
                            </div>
                        
                        </form> 
                    </div>

            </div>
        </div>
        
        <!-- end operation form -->

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