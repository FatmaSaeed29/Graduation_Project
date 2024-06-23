<?php
require 'config.php';
if(empty($_SESSION["userId"])){
    header("Location: login.php");
  }

if(isset($_POST["submit"])){
    $category           =$_POST["category"];
    $phone              =$_POST["phone"];
    $date               =$_POST["date"];
    $user_id            = $_SESSION["userId"];
    $sql = "INSERT INTO appointment VALUES ('','$user_id', '$category' , '$phone' , '$date')";
    // $duplicate      = mysqli_query($conn, "SELECT * FROM appointment WHERE date = '$date'");
    // if(mysqli_num_rows($duplicate) > 0){
    // echo
    // "<script> alert('Date Already Occupied Please Choose Another One'); </script>";
    // }
    // if(!mysqli_query($conn , $sql)){
    //     "<script> alert('Successfuly Booked'); </script>";
    //     header("refresh:0; url=Operation_Done.php");

    // }
    // else{
    //     "<script> alert('Data Does Not Inserted'); </script>";
    // }
    if (!mysqli_query($conn, $sql)) {
        "<script>alert ('Registration Successfully Done'); </script>";
    } else {
        "<script> alert('Data Does Not Inserted'); </script>";
    }
    header("refresh:0; url=appontment_Done.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/appointent.css">
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
                    <h2 style="font-family: 'El Messiri', sans-serif; color: rgb(4, 4, 54); font-weight: bold;" class="mb-4">حجز معاد للكشف</h2>
                    <div class="row">                        
                    <div class="col">
                            <div class="input-group mb-3">
                                    <select name="category" class="form-select" aria-label="Default select example" 
                                    style="direction: rtl;" dir="rtl" required>
                                        <option selected disabled>نوع الكشف</option>
                                        <option value="باطنة">باطنة</option>
                                        <option value="جلدية">جلدية</option>
                                        <option value="عيون">عيون</option>
                                        <option value="أسنان">أسنان</option>
                                        <option value="مسالك بولية">مسالك بولية</option>
                                        <option value="عظام">عظام</option>
                                        <option value="صدر">صدر</option>
                                        <option value="أنف و أذن">أنف و أذن</option>
                                        <option value=">مخ و أعصاب">مخ و أعصاب</option>
                                        <option value="نسا و توليد">نسا و توليد</option>
                                    </select>
                                <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->

                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" name="phone" class="form-control" placeholder="الهاتف" aria-label="الهاتف"required>
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->

                      </div> <!-- /row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-3">
                            <input type="text" name="date" class="form-control calendar-input" placeholder="(تاريخ الحجز)  "onfocus="this.type='date'" id="date"required >
                            </div> <!-- /input-group -->
                        </div> <!-- /col -->
                      </div> <!-- /row-->

                    

                      <!-- <div class="input-group">
                        <input type="text" class="form-control" placeholder="عنوان الشركة" aria-label="عنوان الشركة" required>
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                      </div> -->

                      


                      <a href="appontment_Done.php"><button  name="submit" type="submit" class="btn btn-lg btn-primary mt-4 px-5" style="background-color: rgb(4, 4, 54);">تسجيل</button></a>
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


    <!-- End Footer Section -->

    <script src="js/company.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>