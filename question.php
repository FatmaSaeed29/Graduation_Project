<?php
require 'config.php';

if (empty($_SESSION["userId"])) {
    header("Location: login.php");
}
if (isset($_POST["submit"])) {
    $name          = $_POST["name"];
    $survey        = $_POST["survey"];
    $userId        = $_SESSION["userId"];
    $sql1          = "INSERT INTO help VALUES('','$userId', '$name' ,'$survey' )";

    if (!mysqli_query($conn, $sql1)) {
        "<script> alert('سيتم أخذ استفسارك في الإعتبار'); </script>";
    } else {
        "<script> alert('سيتم أخذ استفسارك في الإعتبار'); </script>";
    }
    // header("refresh:0; url=Operation_Done.php");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/question.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>الاستفسارات - التأمين الصحي الشامل </title>
</head>
<body>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 270px">
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

    
    <!-- Start Company Form Section -->
    
    <div class="company">
        <div class="rgba">
            <div class="content">
                
                <form method="POST" action="" >
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(4, 4, 54); font-weight: bold;" class="mb-4">
                        للإستفسارات
                    </h2>
                  

                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="الأسم">
                      </div>

                      <div class="mb-3">
                        <textarea class="form-control" name="survey" id="exampleFormControlTextarea1" rows="3" placeholder="اكتب استفسارك " dir="rtl"></textarea>
                      </div>


                      <a href="appontment_Done.php"><button  name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(4, 4, 54);">إرسال</button></a>
                </form>
            </div>
        </div>
    </div>

    <!-- End Company Form Section -->
    
    <script src="js/company.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>