<?php
require 'config.php';

if(isset($_POST["submit"])){
$national_id = $_POST["national_id"];
$password = $_POST["password"];
$pass_confirm = $_POST["pass_confirm"];

$result = mysqli_query($conn, "SELECT * FROM registeration WHERE national_ID ='$national_id'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){

    if($password == $pass_confirm){
    $query= "update registeration set pass = '$password' ,pass_confirm = '$pass_confirm'  where national_ID ='$national_id'";
    $result = mysqli_query($conn, $query);
    

    echo
    "<script> alert('تم تغيير كلمة السر بنجاح'); </script>";
        header("Location: login.php");
    }
    else{
        echo
      "<script> alert('تأكد من تشابه كلمة السر'); </script>";
    }

    
  }
  else{
    echo
      "<script> alert('أنت لا تمتلك حساب!'); </script>";
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>تغيير كلمة السر  - التأمين الصحي الشامل</title>
</head>
<style>
    .login{
    background-image: url(images/reset-password.jpg);
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
    
}
.overlay{
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0,0, 0.5);
}
.form-login{
    background-color: rgba(86, 169, 226, 0.6);
}
.form-login button{
    background: #264b64;
 
}
.form-login button:hover{
    background: #025e9b;

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
                    <a class="nav-link active" aria-current="page" href="Welcome.php" style="color: rgb(2, 2, 105); font-weight: bold;"> دخول / تسجيل</a>
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
   <!-- Start login form -->

   <div class="login">
        <div class="overlay">
            <form class="form-login" action="" method="POST" autocomplete="on">
                <img src="images/user.png" height="60" >
                <input type="number" name="national_id" placeholder=" الرقم القومي ">
                <input type="password" name="password" placeholder=" الرقم السري الجديد ">
                <input type="password" name="pass_confirm" placeholder=" تأكيد الرقم السري الجديد ">
                <button name="submit"> تأكيد </button>
               
               

            </form>
        </div>
    </div>
    <!-- End login form -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>