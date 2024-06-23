
 <?php
require 'config.php';
if(empty($_SESSION["adminId"])){
    header("Location: AdminLogin.php");
  }

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin_management.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>صفحة الإدارة  - التأمين الصحي الشامل</title>
</head>
<body>
   
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 320px" >
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


    <!-- Start Welcome Section -->
    
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-6  " style="margin-top: 300px;">
                    <a class="btn btn-primary mx-3" href="vaccine_choice.php" role="button" style="width: 200px; ">التطعيمات</a>
                    <a class="btn btn-primary mx-3" href="admin-company.php" role="button" style="width: 200px;">تعاقد شركة</a>

                    <br>
                    <a class="btn btn-primary mx-3" href="admin-appointement.php" role="button" style="width: 200px; margin-top: 20px; ">حجز كشف</a>
                    <a class="btn btn-primary mx-3" href="admin-operation.php" role="button" style="width: 200px; margin-top: 20px;">عمليات جراحية</a>
                    <br>

                    <a class="btn btn-primary mx-3" href="Admin_baby.php" role="button" style="width: 200px; margin-top: 20px; ">تسجيل مولود جديد</a>
                    <a class="btn btn-primary mx-3" href="admin-presc.php" role="button" style="width: 200px; margin-top: 20px;">إضافة روشتة جديدة</a>
                    <br>


                    <!-- <a class="btn btn-primary" href="Admin_baby.php" role="button" style="width: 200px; display: block; margin: auto;  margin-top: 20px; margin-left: 130px;">تسجيل مولود جديد</a> -->
                </div> <!-- End Col -->
                <div class="col-md">
                    <img src="images/management.gif" alt="" width="500px" height="400px" style="margin-top: 150px; margin-left: 10px;">
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