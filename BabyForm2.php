<?php
require 'config.php';

if(empty($_SESSION["userId"])){
  header("Location: login.php");
}

if($_GET){
    $dataSubmit = $_GET['dataSubmit'];
}
else{
    header("Location: BabyForm1.php");
}

// $dataSubmit = $_GET['dataSubmit'];
// echo $dataSubmit->name;

// if (isset($_POST["submit"])){
//   $mother_num  = $_POST["mother_num"];
//   $child_num  = $_POST["child_num"];
//   $hospital_name  = $_POST["hospital_name"];
//   $doctor_name  = $_POST["doctor_name"];
//   $father_id  = $_POST["father_id"];
//   $mother_id  = $_POST["mother_id"];
//   $mother_job  = $_POST["mother_job"];
//   $father_job  = $_POST["father_job"];

// $sql1= "INSERT INTO baby VALUES('','$dataSubmit->national_id','$dataSubmit->name','$dataSubmit->phone','$dataSubmit->gender' ,'$dataSubmit->blood_type' , '$dataSubmit->weight , '$dataSubmit->birth_date' , $dataSubmit->government , $dataSubmit->city ,$dataSubmit->center, $mother_num, $child_num, '$hospital_name', '$doctor_name', '$father_id', '$father_job', '$mother_id', '$mother_job')";
// $result = mysqli_query($conn, $sql1);
//     if ($result) {
//         "<script>alert ('Registration Successfully Done'); </script>";
//     } else {
//         "<script> alert('Data Does Not Inserted'); </script>";
//     }

// }
// echo $data->name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/baby.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>الصفحة الرئيسية - التأمين الصحي الشامل</title>
</head>

<body>

    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">

        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style="margin-left: 320px">
                <div class="nav-menu">


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <li>
                            <a class="navbar-brand active" href="index.php" style="color: rgb(2, 2, 105);">الصفحة
                                الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="about-us.php"
                                style="color: rgb(2, 2, 105);">معلومات عنا</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: rgb(2, 2, 105); margin-right: 10px;">
                                الخدمات
                            </a>
                            <ul class="dropdown-menu" style="direction: rtl; text-align:right">
                                <li><a class="dropdown-item" href="admin_management.php"
                                        style="direction: rtl; text-align:right">
                                        الإدارة
                                    </a></li>
                                <li><a class="dropdown-item" href="service_choice.php"
                                        style="direction: rtl; text-align:right">
                                        الحصول على الخدمات
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-4" href="FAQ.php" style="color: rgb(2, 2, 105);">الأسئلة
                                الشائعة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="help.php"
                                style="color: rgb(2, 2, 105);"> المساعدة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-4" aria-current="page" href="contact_us.php"
                                style="color: rgb(2, 2, 105);"> تواصل معنا</a>
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


    <!-- start registeration form -->
    <div class="registeration">
        <div class="rgba">
            <div class="content">
                <?php
                echo "<form method='POST' action='babySubmit.php?dataSubmit=$dataSubmit'>"
                ?>
                <!-- <form method="POST" action="babySubmit.php?$dataSubmit"> -->
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(231, 21, 192); font-weight: bold;"
                        class="mb-4"> تسجيل مولود جديد</h2>

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="رقم المولود (أي ترتيبه بين إخوته)"
                                    aria-label="رقم المولود (أي ترتيبه بين إخوته)" name="child_num" required>
                                
                                <span class="input-group-text"><i class="fas fa-sort-circle"></i></span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="رقم الولادة بالنسبة للأم"
                                    aria-label="رقم الولادة بالنسبة للأم" name="mother_num" required>
                                <span class="input-group-text"><i class="fas fa-sort-circle"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="اسم الطبيب"
                                    aria-label=" اسم الطبيب " name="doctor_name" required>
                                <span class="input-group-text"><i class="far fa-file-signature"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="مستشفي الولادة "
                                    aria-label="مستشفي الولادة " name="hospital_name" required>
                                <span class="input-group-text"><i class="fas fa-hospital"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder=" وظيفة الأب  "
                                    aria-label=" وظيفة الأب " name="father_job" required>
                                <span class="input-group-text"><i class="fas fa-question"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="  الرقم القومي للأب"
                                    aria-label="الرقم القومي للأب" name="father_id" required>
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder=" وظيفة الأم  "
                                    aria-label=" وظيفة الأم " name="mother_job" required>
                                <span class="input-group-text"><i class="fas fa-question"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="  الرقم القومي للأم"
                                    aria-label="الرقم القومي للأم" name="mother_id" required>
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                        </div>
                    </div>




                    <button name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5"
                        style="background-color: rgb(231, 21, 192); align-items: center;">تسجيل</button>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>