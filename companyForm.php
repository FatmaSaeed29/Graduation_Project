<?php
require 'config.php';

if (empty($_SESSION["userId"])) {
    header("Location: login.php");
}
if (isset($_POST["submit"])) {
    $company_activity       = $_POST["company_activity"];
    $tax                    = $_POST["tax"];
    $commercial_num         = $_POST["commercial_num"];
    $employee_num           = $_POST["employee_num"];
    $request_num            = $_POST["request_num"];
    $request_date           = $_POST["request_date"];
    $category               = $_POST["category"];
    $email                  = $_POST["email"];
    $gov                    = $_POST["gov"];
    $city                   = $_POST["city"];
    $state                  = $_POST["state"];
    $address                = $_POST["address"];
    $link                   = $_POST["link"];
    $userId                 = $_SESSION['userId'];
    $sql1                   = "INSERT INTO company VALUES('','$userId','$company_activity','$tax','$commercial_num','$employee_num' ,'$request_num' , '$request_date' , '$category' , '$email	' , '$gov' , '$city' , '$state' , '$address', '$link' )";

    if (!mysqli_query($conn, $sql1)) {
        echo "<script>alert ('Registration Successfully Done'); </script>";
    } else {
       echo  "<script> alert('Data Successfully Inserted'); </script>";
    }
    header("refresh:1; url=number_of_employees.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/company.css">
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
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(4, 4, 54); font-weight: bold;" class="mb-4">تسجيل تعاقد مع الشركة</h2>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="tax" class="form-control" placeholder="السجل الضريبي" aria-label="رقم الشركة الضريبي" required>
                                <span class="input-group-text input-img"><img src="images/tax.png" alt="Tax" height="22px" width="22px"></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                        
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="company_activity" class="form-control" placeholder="نشاط الشركة (التخصص )" aria-label="نشاط الشركة (التخصص )" required>
                                <span class="input-group-text"><img src="images/specialization.png" alt="Tax" height="22px" width="22px"></span>
                            </div> <!-- /input-group -->
                        </div><!-- /col -->
                      </div> <!-- /row-->

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="employee_num" class="form-control" placeholder="عدد الموظفين" aria-label=" عدد الموظفين" required>
                                <span class="input-group-text"><i class="fas fa-users" ></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="commercial_num" class="form-control" placeholder="رقم السجل التجاري" aria-label="رقم السجل التجاري" required>
                                <span class="input-group-text"><img src="images/buisness.png" alt="Tax" height="22px" width="22px"></span>
                            </div> <!-- /input-group -->
                        </div>  <!-- /col -->
                        
                      </div> <!-- /row-->

                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <!-- <input type="date" name="date" class="form-control calendar-input" placeholder="(تاريخ الطلب)  "
                                aria-label="تاريخ الطلب" required style="direction: rtl;" > -->
                                <input type="text" name="request_date" class="form-control calendar-input" placeholder="(تاريخ الطلب)  "onfocus="this.type='date'" id="date"required >
                                
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="number" min="1" name="request_num" style="direction: rtl;" class="form-control" placeholder="رقم الطلب" aria-label="رقم الطلب" required>
                                <span class="input-group-text"><img src="images/number.png" alt="Tax" height="22px" width="22px"></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                      </div> <!-- /row-->

                    <div class="row">
                    <div class="col">
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="البريد الإلكتروني" aria-label="البريد الإلكتروني" required>
                                <span class="input-group-text"><i class="fas fa-at"></i></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->

                        <div class="col">
                            <div class="input-group mb-3">
                                    <select name="category" class="form-select" aria-label="Default select example" 
                                    style="direction: rtl;" dir="rtl">
                                        <option selected>الفئة</option>
                                        <option value="شامل">شامل</option>
                                        <option value="جزئي">جزئي</option>
                                    </select>
                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                      </div> <!-- /row-->

                      <!-- <div class="input-group">
                        <input type="text" class="form-control" placeholder="عنوان الشركة" aria-label="عنوان الشركة" required>
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                      </div> -->

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

            <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" placeholder="العنوان" aria-label=" العنوان " required >
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>  
                    </div> 
                </div> 

            <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" name="link" class="form-control" placeholder="موقع الشركة" aria-label=" موقع الشركة " required >
                        <span class="input-group-text"><i class="fas fa-link"></i></span>  
                    </div> 
                </div> 

                      <button  name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(4, 4, 54); margin: bottom 15px;">تسجيل</button>
                </form>
            </div>
        </div>
    </div>

    <!-- End Company Form Section -->

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

    <!-- End Footer Section -->

    <script src="js/company.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>