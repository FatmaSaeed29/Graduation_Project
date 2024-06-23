<?php

require 'config.php';
if(!empty($_SESSION["adminId"])){
  header("Location: vaccine_choice.php");
  exit();
}



if(isset($_POST["submit"])){
    unset($_SESSION['userId']);
    $email = $_POST["email"];
    $pass = $_POST["pass"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE email ='$email'");
  $row = mysqli_fetch_assoc($result);
  echo mysqli_num_rows($result);
  if(mysqli_num_rows($result) > 0){
    if($pass == $row['pass']){
      $_SESSION['adminId'] = $row['ID'];
      $_SESSION['login'] = true;
      header("Location: admin_management.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
     
    }
  }
  else{
    echo
      "<script> alert('You Are not Admin'); </script>";
    
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin-login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>دخول / تسجيل  - التأمين الصحي الشامل</title>
</head>
<body>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = " margin-left: 310px; ">
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
                    <a class="nav-link active" aria-current="page" href="Welcome.php" style="color: rgb(2, 2, 105); font-weight: bold;"> دخول / تسجيل</a>
                </li>
                
                
                
            </ul>
            
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo ">
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->

    <!-- Start login form -->

    <div class="login">
        <div class="overlay">
            <form class="form-login" action="" method="POST" autocomplete="on">
                <img src="images/user.png" height="60" class="mt-4" >
                <input type="text" name="email" placeholder=" البريد الإلكتروني">
                <input type="password" name="pass" placeholder=" الرقم السري ">
                <button class="mt-4 mb-5" name="submit"> دخول </button>
                <!-- <a href="#"> ليس لديك حساب / تسجيل </a> -->
              

            </form>
        </div>
    </div>
    <!-- End login form -->

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>