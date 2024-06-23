<?php

require 'config.php';
if(!empty($_SESSION["userId"])){
  header("Location: index.php");
}

if(isset($_POST["submit"])){
  $national_id = $_POST["national_id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $gender = $_POST["gender"];
  $job_num = $_POST["job_num"];
  $job = $_POST["job"];
  $pass = $_POST["pass"];
  $pass_confirm = $_POST["pass_confirm"];
  $birthdate = $_POST["birthdate"];
  $dublicate = mysqli_query($conn, "SELECT * FROM registeration WHERE national_ID ='$national_id'");
  if(mysqli_num_rows($dublicate) > 0 ) {
    echo
    "<script>alert ('National ID Has Already Taken'); </script>";

  }
  else{
    if($pass == $pass_confirm){
      $query = "INSERT INTO registeration VALUES ('' , '$national_id' , '$name', '$email', '$phone' , '$gender' , '$job' , '$job_num' , '$pass' , '$pass_confirm' , '$birthdate' , '','')";
      mysqli_query($conn,$query);
      echo
      "<script>alert ('Registration Successfully Done'); </script>";

      header("Location: login.php");

    }
    else{
      echo
      "<script>alert ('Password Does Not Match'); </script>";
    }
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
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>دخول / تسجيل  - التأمين الصحي الشامل</title>
</head>
<body>
     
    <!-- Navbar Section -->

     <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 335px">
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
          
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo">
                
            </div>
            
            </div>
        </div>
    </nav> 

    <!-- End Navbar Section -->
    

    <!-- start registeration form -->
     <div class="registeration">
      <div class="rgba">
        <div class="content">

          <form action="" method="post" autocomplete="on">
            <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(255, 255, 255); font-weight: bold;" class="mb-4"> التسجيل إلي الموقع</h2>
            <div class="row">
              <div class="col">
                  <div class="input-group mb-3">
                      <input name="name" type="text" class="form-control" placeholder=" الاسم " aria-label=" الاسم " required>
                      <span class="input-group-text" ><i class="far fa-file-signature"></i></span>
                  </div> 
              </div> 
              <div class="col">
                <div class="input-group mb-3">
                    <input name="national_id" type="text" class="form-control" placeholder="الرقم القومي" aria-label="الرقم القومي" required>
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                </div> 
            </div> 
          </div> 

          <div class="row">
          <div class="col">
              <div class="input-group mb-3">
                  <input name="phone" type="number" class="form-control" placeholder=" رقم التليفون ">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
              </div> 
          </div>  
        
          <div class="col">
              <div class="input-group mb-3">
                  <input name="email" type="email" class="form-control" placeholder=" البريد الالكتروني ">
                  <span class="input-group-text"><i class="fas fa-at"></i></span>
              </div> 
          </div> 

      </div>
          

          <div class="row">
            <div class="col">
              <div class="input-group mb-3">
              <input name="birthdate" type="date" class="form-control calendar-input" placeholder=" تاريخ الميلاد" aria-label=" تاريخ الميلاد " required style="direction: rtl;">
              </div> 
          </div> 
            
          <div class="col">
              <div class="input-group mb-3">
                      <select name="gender" class="form-select" aria-label="Default select example" 
                      style="direction: rtl;" dir="rtl">
                          <option selected> الجنس </option>
                          <option value="ذكر"> ذكر </option>
                          <option value="انثى"> أنثي </option>
                      </select>
                  <span class="input-group-text"><i class="fad fa-genderless"></i></span>
              </div> 
          </div> 
        </div> 
      <div class="row">
        <div class="col">
          <div class="input-group mb-3">
              <input name="job_num" type="text" class="form-control" placeholder=" رقم الوظيفة " aria-label=" رقم الوظيفة " required>
              <span class="input-group-text"><i class="fal fa-file-spreadsheet"></i></span>
          </div> 
      </div>  
        
      <div class="col">
        <div class="input-group mb-3">
                <select name="job" class="form-select" aria-label="Default select example" 
                style="direction: rtl;" dir="rtl">
                    <option selected>  تمتلك وظيفة</option>
                    <option value="نعم"> نعم  </option>
                    <option value="لا"> لا </option>
                </select>
            <span class="input-group-text"><i class="fas fa-question"></i></span>
        </div> 
    </div> 

      </div>

      <div class="row">
        <div class="col">
          <div class="input-group mb-3">
              <input name="pass_confirm" type="password" class="form-control" placeholder="  تأكيد الرقم السري  " aria-label="  تأكيد الرقم السري  " required>
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div> 
      </div>  
        
      <div class="col">
        <div class="input-group mb-3">
          <input name="pass" type="password" class="form-control" placeholder="  الرقم السري  " aria-label="  الرقم السري  " required>
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
    </div> 

      </div>
      

      
      <button name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(189, 15, 15); align-items: center;">تسجيل</button>

          </form>
        </div>
      </div>
     </div>





































   <!-- <div class="registeration">
      <div class="content">
    
    <form class="row g-3 needs-validation" novalidate id="form">
        <div class="col-md-12">
        
    
        <div class="col-md-4" id="idnum">
          <label for="validationCustomUsername" class="form-label" > الرقم القومي </label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-plus-square"></i></span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-4" id="namen">
            <label for="validationCustomUsername" class="form-label"> الاسم </label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-file-signature"></i></span>
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-4" id="phone">
            <label for="validationCustomUsername" class="form-label"> رقم التليفون </label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone"></i></span>
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          
          </div>
          <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="الرقم القومي" aria-label="الرقم القومي" required>
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            </div>  /input-group 
        </div> 

          <div class="col-md-4" id="type">
            <label for="validationCustom04" class="form-label"> نوع الجنس </label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value=""> اختر </option>
              <option> ذكر </option>
              <option> أنثي </option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>

          <div class="col-md-2">
            <label for="validationCustom04" class="form-label"> تاريخ الميلاد </label>
              <select name="الشهر">
                <option value="month"> يناير </option>
                <option value="month"> فبراير </option>
                <option value="month">  مارس </option>
                <option value="month"> يناير </option>
                رقم<option value="month"> يناير </option>
                <option value="month"> يناير </option>
                <option value="month"> يناير </option>
                <option value="month"> يناير </option>
                <option value="month"> يناير </option>
                <option value="month"> يناير </option>
                <option value="month"> يناير </option>

              </select>
              <select name="days">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>

              <select name="Year">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="2000">2000</option>
              </select>
              
        
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label"> علي قيد الحياة </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  نعم
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  لا
                </label>
              </div>

        </div>
    
       <br>
        <div class="col-12" id="button">
          <button class="btn btn-primary" type="submit"> تسجيل </button>
        </div>
    </div>
      </form>
    </div> -->
  
    <!--end registeration form-->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>