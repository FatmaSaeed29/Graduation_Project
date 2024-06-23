<?php
require 'config.php';

if (empty($_SESSION["userId"])) {
    header("Location: login.php");
}
if (isset($_POST["submit"])) {
    $name               = $_POST["name"];
    $national_id        = $_POST["national_id"];
    $section            = $_POST["section"];
    $category           = $_POST["category"];
    $job                = $_POST["job"];
    $userId             = $_SESSION['userId'];
    $sql1               = "INSERT INTO employees VALUES('','$userId','$name','$national_id','$section','$category' ,'$job' )";

    if (!mysqli_query($conn, $sql1)) {
        echo "<script>alert ('Registration Successfully Done'); </script>";
    } else {
       echo  "<script> alert('Data Successfully Inserted'); </script>";
    }
    header("refresh:2; url=service.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/number_of_employees.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>الخدمات - التأمين الصحي الشامل </title>
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

            <a href="user_profile.php" class="profile"> <img src="images/profile1.png" style = "position: absolute; width: 70px;
                top: 18px; right: 1390px;"></a>
            
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
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(43, 43, 75); font-weight: bold;" class="mb-4">  الموظفين </h2>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder=" * الاسم "
                                    aria-label=" الاسم " required> 
                                <span class="input-group-text"><i class="far fa-file-signature"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="number" name="national_id" class="form-control" placeholder=" * الرقم القومي"
                                    aria-label="الرقم القومي" required>
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                    <select name="section" class="form-select" aria-label="Default select example" 
                                    style="direction: rtl;" dir="rtl">
                                        <option selected>* الشريحة   </option>
                                        <option value="أولي">أولي</option>
                                        <option value="تانية">تانية</option>
                                        <option value="تالتة">تالتة</option>
                                    </select>
                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
    
                            <div class="col">
                                <div class="input-group mb-3">
                                        <select name="category" class="form-select" aria-label="Default select example" 
                                        style="direction: rtl;" dir="rtl">
                                            <option selected> *  الفئة</option>
                                            <option value="شامل">شامل</option>
                                            <option value="جزئي">جزئي</option>
                                        </select>
                                    <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                </div> <!-- /input-group -->
                            </div> <!-- /col -->
                          </div> <!-- /row-->
                          <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <input type="text" name="job" class="form-control" placeholder="  * الوظيفة "
                                        aria-label=" الوظيفة " required>
                                    <span class="input-group-text"><i class="far fa-file-signature"></i></span>
                                </div>
                            </div>
                        </div>
                

                      <button  name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(43, 43, 75); margin: bottom 15px;">تسجيل</button>
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