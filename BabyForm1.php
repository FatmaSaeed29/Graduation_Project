<?php
require 'config.php';


if(empty($_SESSION["userId"])){
  header("Location: login.php");
}
if (isset($_POST["submit"])) {
    $name         = $_POST["name"];
    $national_id  = $_POST["national_id"];
    $gender       = $_POST["gender"];
    $phone        = $_POST["phone"];
    $weight       = $_POST["weight"];
    $blood_type   = $_POST["blood_type"];
    $birth_date   = $_POST["birth_date"];
    $center       = $_POST["center"];
    $city         = $_POST["city"];
    $government   = $_POST["government"];
    // $userId       = $_SESSION['userId'];

    $dataSubmit = json_encode(["name"=>$name, "national_id" =>$national_id, "gender"=>$gender, 
    "phone"=>$phone, "weight"=>$weight, "blood_type"=>$blood_type, "birth_date"=>$birth_date, 
    "center"=>$center, "city"=>$city, "government"=>$government]);

    header("Location: ./BabyForm2.php?dataSubmit=$dataSubmit"); 
    exit();
    // header("Location: ./login.php");
    // $sql1         = "INSERT INTO baby VALUES('','$national_id','$name','$phone','$gender' ,'$blood_type' , '$weight' , '$birth_date' , '$government' , '$city ' ,'$center')";

    // if (!mysqli_query($conn, $sql1)) {
    //     "<script>alert ('Registration Successfully Done'); </script>";
    // } else {
    //     "<script> alert('Data Does Not Inserted'); </script>";
    // }
}
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

                <form method="POST" action="">
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(231, 21, 192); font-weight: bold;"
                        class="mb-4"> تسجيل مولود جديد</h2>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder=" الاسم "
                                    aria-label=" الاسم " required>
                                <span class="input-group-text"><i class="far fa-file-signature"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="national_id" class="form-control" placeholder="الرقم القومي"
                                    aria-label="الرقم القومي" required>
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <select name="gender" class="form-select" aria-label="Default select example"
                                    style="direction: rtl;" dir="rtl">
                                    <option selected> الجنس </option>
                                    <option value="ذكر"> ذكر </option>
                                    <option value="أنثى"> أنثي </option>
                                </select>
                                <span class="input-group-text"><i class="fad fa-genderless"></i></span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="number" name="phone" class="form-control" placeholder=" رقم التليفون ">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <select name="weight" class="form-select" aria-label="Default select example"
                                    style="direction: ltr;" dir="ltr">
                                    <option selected disabled style="direction: rtl;" dir="rtl"> الوزن </option>
                                    <option value="1.5 : 2" style="direction: ltr;" dir="ltr">1.5 : 2</option>
                                    <option value="2 : 2.5" style="direction: ltr;" dir="ltr">2 : 2.5 </option>
                                    <option value="2.5 : 3" style="direction: ltr;" dir="ltr">2.5 : 3 </option>
                                    <option value="3 : 3.5" style="direction: ltr;" dir="ltr">3 : 3.5 </option>
                                    <option value="3.5 : 4" style="direction: ltr;" dir="ltr">3.5 : 4 </option>
                                    <option value="4 : 4.5" style="direction: ltr;" dir="ltr">4 : 4.5 </option>
                                    <option value="4.5 : 5" style="direction: ltr;" dir="ltr">4.5 : 5 </option>
                                </select>
                                <span class="input-group-text"><i class="fad fa-weight"></i></span>
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mb-3">
                                <select name="blood_type" class="form-select" aria-label="Default select example"
                                    style="direction: rtl;" dir="rtl">
                                    <option selected disabled>  فصيلة الدم</option>
                                    <option value="A+"> A+ </option>
                                    <option value="A-"> A- </option>
                                    <option value="B+"> B+ </option>
                                    <option value="B-"> B- </option>
                                    <option value="AB+"> BA+ </option>
                                    <option value="AB-"> BA- </option>
                                    <option value="O+"> O+ </option>
                                    <option value="O-"> O- </option>
                                </select>
                                <span class="input-group-text"><i class="fas fa-qrcode"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input name="birth_date" type="date" class="form-control calendar-input"
                                    placeholder=" تاريخ الميلاد" aria-label=" تاريخ الميلاد " required
                                    style="direction: rtl;">
                            </div>
                        </div>

                    </div>


                    <?php
                      $conn = mysqli_connect("localhost", "root", "", "healthcare");
                      include_once "Common.php";
                      $common = new Common();
                      $govs = $common->getGov($conn);
                    ?>


                    <div class="row">  
                    <div class="col">
                        <div class="input-group mb-3">
                        <select class="form-control" name="state" id="state_id">
                        <option value="">المركز</option>                       
                       </select>
                            <span class="input-group-text"><i class="fas fa-city"></i></span>
                        </div> 
                    </div> 
                    <div class="col">
                    <div class="input-group mb-3">
                    <select class="form-control" name="city" id="city_id" onchange="getStateByCity();" >
                    <option value="">المدينة</option> 
                     <?php
                      if ($cities->num_rows > 0 ){
                          while ($city = $cities->fetch_object()) {
                              $cityName = $city->cityName; ?>
                              <option value="<?php echo $city->cityName; ?>"><?php echo $govName;?></option>
                          <?php }
                      }
                      ?>                    
                    </select>
                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                    </div> 
                </div> 
                <div class="col">
                    <div class="input-group mb-3">
                    <select name="gov" id="gov_id" class="form-control" onchange="getCityByGov();">
                    <option value="">المحافظة</option>                       
                      <?php
                      if ($govs->num_rows > 0 ){
                          while ($gov = $govs->fetch_object()) {
                              $govName = $gov->name; ?>
                              <option value="<?php echo $gov->id; ?>"><?php echo $govName;?></option>
                          <?php }
                      }
                      ?>
                    </select>
                           
                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                    </div> 
                </div> 
                
            </div>




                    <button name="submit" class="btn btn-lg mt-4 px-5" type="submit" value="Submit"
                        style="background-color: rgb(231, 21, 192); align-items: center; color: #fff;"> للتكملة إضغط هنا
                    </button>

                </form>
            </div>
        </div>
    </div>





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

    <script>
      function getCityByGov() {
        var gov_id = $("#gov_id").val();
        $.post("ajax.php",{getCityByGov:'getCityByGov',gov_id:gov_id},function (response) {
            var data = response.split('^');
            $("#city_id").html(data[1]);
        });
    }
    function getStateByCity() {
        var city_id = $("#city_id").val();
        $.post("ajax.php",{getStateByCity:'getStateByCity',city_id:city_id},function (response) {
            var data = response.split('^');
            $("#state_id").html(data[1]);
        });
    }
    </script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>