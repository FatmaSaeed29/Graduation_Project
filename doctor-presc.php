<?php 
    require 'config.php';
    if(empty($_SESSION["DoctorId"])){
      header("Location: doctor-choice.php");
    }



    $result = mysqli_query($conn, "SELECT * FROM presc");
    $rows = $result -> fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/admin vac_table.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>جدول التطعيمات  - التأمين الصحي الشامل</title>
    <title>Image Upload</title>

</head>
<style type="text/css">
    body
  {
    background-image: linear-gradient(to bottom, rgba(158, 134, 138, 0.6) , rgba(251, 206, 213,0.6));
    background-repeat: no-repeat;
    height: 1000px;

  }

    #content{
      width: 50%;
      margin: 20px auto;
      border: 1px solid #cbcbcb;
    }
    form{
      width: 50%;
      margin: 20px auto;
    }
    form div{
      margin-top: 5px;
    }
    #img_div{
      width: 80%;
      padding: 5px;
      margin: 15px auto;
      border: 1px solid #cbcbcb;
    }

    #user{
      margin-right: -60px;
    }
    #img_div:after{
      content: "";
      display: block;
      clear: both;
    
    }
    #user{
      margin-left: 500px;
      margin-top: 20px;
    }
    img{
      float: left;
      margin-top: -20px;
      width: 300px;
      height: 140px;
      margin-left: 15px;
    }
      .logo
    {
      width: 90px;
      height: 80px;
    } 
</style>
    
    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="height: 92px;">
        
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul" style = "margin-left: 310px">
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
                  if(!empty($_SESSION["DoctorId"])){
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
            
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo" >
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->

    <!-- Start Table Section -->
  
    <div class=" table-section all ">

  
    <?php
          // Create database connection
          $db = mysqli_connect("localhost", "root", "", "healthcare");
          // Initialize message variable
          $msg = "";
        ?>
        <?php
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	$target = "images/".basename($image);
  }
      if(isset($_POST["post"])){
        $user_name          =$_POST["user_name"];
        $presc              =$_POST["presc"];
  	$sql = "INSERT INTO presc (image) VALUES ('','$user_name ', '$presc')";
  }
  $result = mysqli_query($db, "SELECT * FROM presc");
?>
<div id="content"style="margin-top:100px">

<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      // echo"<div id='user'>";
      echo "<div id ='user'<td>".$row['user_name']."</div><td>"; 
      echo "<img src='images/".$row['presc']."' >";
      echo "</div>";
    }
  ?>
          
          
    <script>
      function search_animal() {
        let input = document.getElementById('searchbar').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('animals');
        
        for (i = 0; i < x.length; i++) {
          if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";				
          }
        }
      }
    
    </script>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>