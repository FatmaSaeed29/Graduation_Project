<?php 
    require 'config.php';
    if(empty($_SESSION["adminId"])){
      header("Location: AdminLogin.php");
    }



    $result = mysqli_query($conn, "SELECT * FROM appointment");
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
</head>

<style>

  body
{
    background-image: linear-gradient(to bottom, rgba(158, 134, 138, 0.6) , rgba(251, 206, 213,0.6));
    background-repeat: no-repeat;
    height: 1000px;

}
</style>

<body>
    
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
            
            <img src="images/logo1.png" alt="logo" width="90px" height="80px" class="logo ">
                
            </div>
            
            </div>
        </div>
    </nav>

    <!-- End Navbar Section -->

    <!-- Start Table Section -->
    
    <div class=" table-section all ">

    <form action="" method="GET">
                  <div class="input-group mb-3 container" style="margin-top:200px;" dir="rtl">
                    <input type="text" name="search"  value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                     class="form-control rounded-right" placeholder="إبحث هنا بالرقم القومي  " style="border-top-left-radius:0px;border-bottom-left-radius:0px; border-top-right-radius:20px; border-bottom-right-radius:20px;">
                    
                    <button type="submit" class="btn btn-primary" 
                    style="border-top-right-radius:0px;border-bottom-right-radius:0px; border-top-left-radius:20px; border-bottom-left-radius:20px; padding :0px 15px;">بحث</button>
                  </div> <!-- End Input Group Of Search -->
                </form>

        <table class="table container table-bordered border-danger animals"  style="margin-top:50px;">
            <thead>

            
              <tr>
                <th >#</th>
                <th >الرقم القومي</th>
                <th >نوع الكشف </th>
                <th >	رقم التليفون </th>
                <th > تاريخ الحجز </th>
              </tr>

            </thead>
            <tbody class="animals">

            <?php
                $conn = mysqli_connect("localhost", "root", "", "healthcare");

                if(isset($_GET['search']))
                {
                  $filtervalues = $_GET['search'];
                  $querytwo = "SELECT * FROM appointment WHERE user_id LIKE '%$filtervalues%' ";
                  $query_run = mysqli_query($conn, $querytwo);

                  if(mysqli_num_rows($query_run) > 0)
                    {
                      $i=1;
                      foreach($query_run as $items)
                        {
                            ?>
                            <tr>
                              <td><?= $i ?></td>
                              <td><?= $items['user_id']; ?></td>
                              <td><?= $items['category']; ?></td>
                              <td><?= $items['phone']; ?></td>
                              <td><?= $items['date']; ?></td>
                            </tr>
                            <?php
                          $i++;
                        }
                    }
                    else
                    {
                      ?>
                      <tr>
                        <td colspan="6">
                          لا يوجد سجل
                        </td>
                      </tr>
                      <?php
                    }
                }



            ?>
               
            </tbody>
          </table>
          
          </div> <!-- End Search Input -->

    </div>
    
    
    
    <!-- End Table Section -->


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