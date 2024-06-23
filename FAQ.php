<?php 
    require 'config.php';
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> -->
    <title>الصفحة الرئيسية - التأمين الصحي الشامل</title>
</head>
<style>
    .accordion-button::after {
    margin-left:0!important;
    margin-right:auto;
}
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.wrapper {
  /* max-width: 50rem; */
  width: 100%;
  margin: 0 auto;
  direction: rtl;
  position: relative;
  margin-bottom:600px;
}
.tabs {
  position: relative;
  margin: 3rem 0;
  /* background: #1abc9c; */
  height: 14.75rem;
  position: absolute;
  right: 100px;
}
.tabs::before,
.tabs::after {
  content: "";
  display: table;
}
.tabs::after {
  clear: both;
}
.tab {
  float: left;
  
}
.tab-switch {
  display: none;
}
.tab-label {
  position: relative;
  display: block;
  line-height: 2.75em;
  height: 3em;
  padding: 0 1.618em;
  background: #7f5edb;
  /* border: 1px solid #7f5edb; */
  color: #fff;
  cursor: pointer;
  top: 0;
  transition: all 0.25s;
  font-weight:bold;
}
.tab-label:hover {
  top: -0.25rem;
  transition: top 0.25s;
  /* border: 1px solid #7f5edb; */
}
.tab-content {
  height: 12rem;
  position: absolute;
  z-index: 1;
  top: 2.75em;
  right: 0;
  padding: 1.618rem;
  background: #fff;
  color: #2c3e50;
  /* border-bottom: 0.25rem solid #bdc3c7; */
  opacity: 0;
  transition: all 0.35s;
  line-height: 30px;
  
}
.tab-switch:checked + .tab-label {
  background: #fff;
  color: #2c3e50;
  border-bottom: 0;
  /* border: 1px solid #7f5edb; */
  transition: all 0.35s;
  z-index: 1;
  top: -0.0625rem;
}
.tab-switch:checked + label + .tab-content {
  z-index: 2;
  opacity: 1;
  transition: all 0.35s;
  top: 81px;
}
</style>
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
                <a class="nav-link active mx-4" href="FAQ.php" style="color: rgb(2, 2, 105); font-weight: bold;">الأسئلة الشائعة</a>
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

    <!-- Start FAQ Section -->

    <div class="faq">

        <div class="faq-title">
            <h1 class="text-center font-weight-bold">
                المحتويات
            </h1>
        </div> <!-- End faq-title -->


        <div class="wrapper">
          <div class="tabs" dir="rtl">
            <div class="tab">
              <input type="radio" name="css-tabs" id="tab-4" class="tab-switch">
              <label for="tab-4" class="tab-label">
                4. أسئلة متخصصة:
              </label>
              <div class="tab-content">
                <ul id="demo4" class="hide">
                  <li> الخصم من الأجر في حالة الزوجة موظفة أرملة والأبناء يحصلون على المعاش عن الأب المتوفى</li>
                  <li>
                  من سيتحمل الأبناء في حالة الأم مطلقة والأب على المعاش
                  </li>
                  <li>
                  هل تتحمل الأم الأبناء في حالة ان الزوجة موظفة ومطلقة والزوج غير مؤمن عليه؟
                  </li>
                  <li>
                  لو الأب أعمال حرة والأم موظفة هل تقيد الأولاد معها ويتم الخصم منها؟
                  </li>
                  <li>
                  لو الزوج غير مؤمن عليه هل الزوجة تتحمله؟
                  </li>
                  <li>
                  إذا سجل ولي أمر أولادة في مكان عمله ولكن الأولاد تعمل ومؤمن عليهم في مكان اخر كيف يتم المحاسبة والخصم على الأب ام على الأولاد في جهة عملهم وهل نحسب على الاثنين؟
                  </li>
                  <li>
                  الشركات المتعاقدة مع شركات رعاية طبية ما هو المطلوب منها؟
                  </li>
                 </ul>        
              </div> <!-- End tab-content -->
            </div> <!-- end tab -->
              
            
            <div class="tab">
              <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
              <label for="tab-3" class="tab-label">
                3. الاشتراكات:
              </label>
              <div class="tab-content">
                <ul id="demo3" class="hide">
                  <li>اشتراكات صاحب العمل عن العاملين لديه.</li>
                  <li>تعريف أجر الاشتراك.</li>
                  <li>نسبة الاشتراك في حالة الجمع بين أكثر من وظيفة.</li>
                </ul>
              </div> <!-- End tab-content -->
            </div> <!-- end tab -->

            <div class="tab">
              <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
              <label for="tab-2" class="tab-label">
                2. التسجيل وتقديم الخدمة:
              </label>
              <div class="tab-content">
                <ul id="demo2" class="hide">
                  <li>طرق تقديم الخدمة بنظام التأمين الصحي الشامل.</li>
                  <li>الخطوات والأوراق المطلوبة للتسجيل في نظام التأمين الصحي الشامل.</li>
                  <li>موقف العلاج في وحدات غير متعاقدة مع هيئة التأمين الصحي الشامل.</li>
                </ul>
              </div> <!-- End tab-content -->
            </div> <!-- end tab -->

            <div class="tab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
              <label for="tab-1" class="tab-label">
                1. أسئلة عامة: 
              </label>
              <div class="tab-content">
                <ul id="demo1">
                  <li>التعريف بأهم ملامح نظام التأمين الصحي الشامل.</li>
                  <li>شروط الانتفاع بخدمات التأمين الصحي الشامل.</li>
                  <li>العلاقة بين نظام التأمين الصحي الشامل الجديد ونظام التأمين الصحي الحالي في المرحلة الانتقالية.</li>
                  <li>المزايا التي يحصل عليها المواطن وضمان الجودة والخدمة الصحية.</li>
                  <li>تعريف غير القادرين الذين تدعمهم الدولة.</li>
                  <li>موقف ذوي الاحتياجات الخاصة.</li>
                  <li>موقف أصحاب النظم الصحية الخاصة.</li>
                  <li>دور قطاع التأمين الصحي الخاص.</li>
                </ul>
              </div> <!-- End tab-content -->
            </div> <!-- end tab -->

          </div> <!-- end tabs -->
        </div> <!-- End Wrapper -->

        <!-- ********************************************************************************************* -->
  

        <div class="faq-content2">
            <div class="faq-title2">
                <h1 class="text-center font-weight-bold">
                    أولًا : الأسئلة العامة
                </h1>
            </div> <!-- End faq-title2 -->

            <div class="search container mt-5" dir="rtl">
                <input id="searchbar" onkeyup="search_animal()" type="text"
                name="search" placeholder="بحث في الأسئلة">

                <!-- <ol id='list'>
                    <li class="animals">Cat</li>
                    <li class="animals">Dog</li>
                    <li class="animals">Elephant</li>
                    <li class="animals">Fish</li>
                    <li class="animals">Gorilla</li>
                    <li class="animals">Monkey</li>
                    <li class="animals">Turtle</li>
                    <li class="animals">Whale</li>
                    <li class="animals">Aligator</li>
                    <li class="animals">Donkey</li>
                    <li class="animals">Horse</li>
                </ol> -->


                <div class="accordion" id="accordionExample">
                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      ما هو التأمين الصحي الشامل؟
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <ul>
                            <li>
                                هو نظام تكافلي اجتماعي تقدم من خلاله خدمات طبية ذات جودة عالية لجميع فئات المجتمع دون تمييز وتتكفل الدولة من خلاله بغير القادرين وتكون الأسرة هي وحدة التغطية.
                            </li>
                            <li>
                                ويشمل النظام مجموعة متكاملة من الخدمات التشخيصية والعلاجية كما يتيح للمنتفع الحرية في اختيار مقدمي الخدمة الصحية بخلاف طبيب الأسرة.
                            </li>
                          </ul>
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->


                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ما هي شروط الانتفاع بخدمات التامين الصحي؟
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      يشترط أن يكون المنتفع من نظام التأمين الصحي الشامل مشتركا في النظام ومسددا للاشتراكات أو من غير القادرين الذين تتحمل عنهم الخزانة العامة عبء الاشتراكات وإذا لم يشترك او تخلف عن السداد يربط انتفاعه بخدمات التأمين الصحي الشامل بسداد الاشتراكات المتأخرة دفعة واحدة أو بالتقسيط فيما عدا حالات الطوارئ.
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ما هي العلاقة بين التأمين الصحي الحالي والتأمين الصحي الشامل في المرحلة الانتقالية حتى تطبيقه على كافة محافظات الجمهورية؟                      
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <ul>
                            <li>
                            سيتم توفير التغطية الصحية لكافة المواطنين بهذه المحافظة، والتمتع بكافة الخدمات العلاجية لكافة أفراد الأسرة علما بأن حزمة الخدمات والمزايا الصحية المقدمة في هذا النظام الجديد لا تقل عن الحزمة المقدمة في نظام التأمين الصحي الحالي.
                            </li>
                            <li>
                            سيكون هناك دائما تكامل في تقديم الرعاية الصحية بين النظامين، وفي حالة المرض للمؤمن عليه أثناء تواجده بمحافظة أخرى خارج نظام التطبيق سيتم الالتزام بتوفير الخدمة الصحية والعلاج من خلال تعاقد هيئة التأمين الصحي الشامل مع شبكة مقدمي الخدمة الصحية المعتمدة في هذه المحافظة.
                            </li>
                            <li>
                            سيتم تحصيل الاشتراكات الجديدة عن الأسرة بأكملها لصالح نظام التأمين الصحي الشامل ولن تدفع مرة أخرى كنسبة من اشتراكات التأمينات الاجتماعية.
                            </li>
                          </ul>
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="heading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                      ما هي المزايا التي يحصل عليها المواطن وضمان الجودة والخدمة الصحية 
                    </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      كل الخدمات الصحية التأمينية الاتية 
                        <ul>
                            <li>
                            طبيب الاسرة والممارس العام.
                            </li>
                            <li>
                            الأطباء الاخصائيين ويتضمن طب وجراحة الاسنان.
                            </li>
                            <li>
                            العلاج والإقامة بالمستشفيات واجراء العمليات الجراحية وأنواع العلاج الأخرى.
                            </li>
                            <li>
                            الخدمات التشخيصية التصويرية والمعملية. 
                            </li>
                            <li>
                            الخدمات التأهيلية وصرف الأجهزة التعويضية.
                            </li>
                            <li>
                            صرف الأدوية.
                            </li>
                            <li>
                            الرعاية الطبية المنزلية عند الاقتضاء.
                            </li>
                            <li>
                            صرف أدوية الأورام والأمراض المزمنة مجانا.
                            </li>
                            
                          </ul>
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="heading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                      ما هو تعريف غير القادرين الذين تدعمهم الدولة.؟
                    </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      يصدر قرار من رئيس مجلس الوزراء بتحديد المعايير وعناصر الاستهداف الواجب توافرها لتسجيل المواطن ضمن غير القادرين وأيضا الضوابط المتعلقة بتلك المعايير، وتوجد لجنة مشكلة من وزارة المالية ووزارة التضامن الاجتماعي والجهاز المركزي للتعبئة العامة والاحصاء لتعريف غير القادرين وفقا للمعايير والضوابط المحددة التي يصدر بها قرار رئيس مجلس الوزراء، على أن تتكفل الدولة بنسبة تتراوح بين 30-35% من المواطنين على مستوى الجمهورية.

                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="heading6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                      ما هو موقف ذوي الاحتياجات الخاصة.؟
                    </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      من خلال نظام التأمين الصحي الشامل تلتزم الدولة بسداد اشتراك المؤمن عليهم من فئات غير القادرين بما فيهم ذوي الاحتياجات الخاصة الذين لا يوجد لأسرهم مصدر دخل كافي.
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="heading7">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                      ما هو موقف أصحاب النظم الصحية الخاصة؟
                    </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      سيكون هناك دور أساسي لشركات التأمين الصحي الخاص، حيث ستغطي كافة الخدمات التكميلية والخدمات الفندقية الغير مغطاة بحزمة الخدمات الصحية الخاصة بنظام التأمين الصحي الشامل.
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                  <!-- ********************************************************************************************* -->

                  <div class="accordion-item animals">
                    <h2 class="accordion-header" id="heading8">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                      ما هو دور قطاع التأمين الصحي الخاص.؟
                    </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      سيكون هناك دور أساسي لشركات التأمين الصحي الخاص، حيث ستغطي كافة الخدمات التكميلية والخدمات الفندقية الغير مغطاة بحزمة الخدمات الصحية الخاصة بنظام التأمين الصحي الشامل.
                      </div> <!-- End Accordion Body -->
                    </div> <!-- End Accordion Collapse -->
                  </div> <!-- End Accordion Item -->

                </div> <!-- End accordion parent (#accordionExample) -->

                <!-- ********************************************************************************************* -->
                <!-- ********************************************************************************************* -->

                <!-- Start Second Section -->
                    <div class="faq-title2">
                        <h1 class="text-center font-weight-bold">
                            ثانيًا : أسئلة خاصة بالتسجيل وتقديم الخدمة
                        </h1>
                    </div> <!-- End faq-title2 -->


                    <div class="search container mt-5" dir="rtl">
                        <input id="searchbar1" onkeyup="search_animal1()" type="text"
                        name="search" placeholder="بحث في الأسئلة">



                        <div class="accordion" id="accordionExample2">

                          <div class="accordion-item animals1">
                            <h2 class="accordion-header" id="headingOnee">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnee" aria-expanded="true" aria-controls="collapseOnee">
                              ما هي طرق تقديم الخدمة بنظام التأمين الصحي الشامل؟
                              </button>
                            </h2>
                            <div id="collapseOnee" class="accordion-collapse collapse show" aria-labelledby="headingOnee" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                              يتوجه المريض أولا الى طبيب الأسرة أو الممارس العام بوحدات الرعاية الأولية التابع لها المواطن أو الأسرة والتي سبق له أنه قام بتسجيل نفسه أو أسرته عليها، حيث يقوم طبيب الأسرة او الممارس العام بدوره في تقديم الخدمات الصحية اللازمة حسب طبيعة الحالة، ويتم الإحالة الى مستويات الرعاية الصحية الأعلى عند الحاجة، وكذلك مع حرية المواطن في اختيار مقدم الخدمة الصحية في مستويات الرعاية الصحية الأعلى من بين مقدمي الخدمة الصحية في القطاع العام والخاص والجامعي والعسكري.
                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!--******************************************************************************************* -->

                          <div class="accordion-item animals1">
                            <h2 class="accordion-header" id="headingTwoo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                              ما هي الخطوات والأوراق المطلوبة للتسجيل في نظام التأمين الصحي الشامل؟
                              </button>
                            </h2>
                            <div id="collapseTwoo" class="accordion-collapse collapse" aria-labelledby="headingTwoo" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <ul>
                                  <li>
                                  يتوجه الفرد وجميع أفراد أسرته الى أقرب وحدة صحية أو مركز طب أسرة لأجراء الفحص الشامل له ولأسرته وبحوزته مستندات اثبات الشخصية (بطاقة رقم قومي سارية – شهادات ميلاد الأطفال المميكنة)
                                  </li>
                                  <li>
                                  يتم فتح ملف طبي للأسرة مسجل به كافة البيانات والتاريخ الصحي والمرض وكذلك الأدوية التي سبق أو مازال يحصل عليها حيث يتم عمل كود لكل مواطن.
                                  </li>
                                  <li>
                                  يتم تسجيل بيانات الأسرة على قاعدة البيانات حتى يتمكن أفرادها من التردد على الوحدة للكشف والحصول على الدواء وباقي الخدمات الطبية
                                  </li>
                                  <li>
                                  الفئات المنتظمة والخاضعة لقانون التأمين الاجتماعي عليهم تقديم بيان بأفراد الأسرة (قيد عائلي) للوحدة الإدارية التابع لها لتحديد الاشتراكات الواجبة عليه.
                                  </li>
                                  <li>
                                  أما الفئات الغير الخاضعة لقوانين التامين الاجتماعي فعليهم التقدم للهيئة بالقيد العائلي موثق بالمستندات الدالة عليه، والسداد الذاتي للاشتراكات.
                                  </li>
                                  <li>
                                  أما غير القادرين فتقوم الدولة بسداد الاشتراكات نيابة عنهم.
                                  </li>
                                </ul>                              
                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                      <!--******************************************************************************************* -->
                          <div class="accordion-item animals1">
                            <h2 class="accordion-header" id="headingThreee">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreee" aria-expanded="false" aria-controls="collapseThreee">
                              ما هو دور قطاع التأمين الصحي الخاص ؟
                              </button>
                            </h2>
                            <div id="collapseThreee" class="accordion-collapse collapse" aria-labelledby="headingThreee" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                              للمؤمن عليه حق العلاج في وحدات غير متعاقدة مع هيئة التأمين الصحي الشامل إذا كانت حالته المرضية طارئة ولها صفة الاستعجال، بما لا تحتمل معه تأخر تقديم الخدمة العلاجية، وله حق استرداد تكاليف علاجه، وذلك كله وفقا للقواعد والإجراءات الصادرة عن هيئة التأمين الصحي الشامل.
                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                        </div> <!-- End accordion parent (#accordionExample) -->


                    <!-- ********************************************************************************************* -->
                    <!-- ********************************************************************************************* -->

                        <!-- Start Third Section -->
                        <div class="faq-title2">
                            <h1 class="text-center font-weight-bold">
                                ثالثًا : أسئلة خاصة بالتسجيل وتقديم الخدمة
                            </h1>
                        </div> <!-- faq-title2 -->

                        <div class="search container mt-5" dir="rtl">
                          <input id="searchbar2" onkeyup="search_animal2()" type="text"
                          name="search" placeholder="بحث في الأسئلة">


                          <div class="accordion" id="accordionExample3">
                            <div class="accordion-item animals2 ">
                              <h2 class="accordion-header" id="headingOneee">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneee" aria-expanded="true" aria-controls="collapseOneee">
                                ما هي اشتراكات صاحب العمل عن العاملين لديه ؟
                                </button>
                              </h2>
                              <div id="collapseOneee" class="accordion-collapse collapse show" aria-labelledby="headingOneee" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                حصة صاحب العمل 4% (3% تأمين مرض، 1% إصابات عمل) نظير خدمات المرض والعلاج واصابات العمل من اجمالي اجر الاشتراك للعاملين المؤمن عليهم وفقا لأحكام القانون رقم 79 لسنة 1975 وبحد أدني خمسون جنيها شهريا.
                                </div> <!-- End Accordion Body -->
                              </div> <!-- End Accordion Collapse -->
                            </div> <!-- End Accordion Item -->

                      <!-- ******************************************************************************************* -->
                            
                            <div class="accordion-item animals2">
                              <h2 class="accordion-header" id="headingTwooo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwooo" aria-expanded="false" aria-controls="collapseTwooo">
                                ما هو تعريف أجر الاشتراك ؟
                                </button>
                              </h2>
                              <div id="collapseTwooo" class="accordion-collapse collapse" aria-labelledby="headingTwooo" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                هو كل ما يحصل عليه من مقابل نقدي من جهة أو جهات عملة وعلى الأخص ما يلي:
                                <ul>
                                    <li>
                                    الأجر المنصوص عليه في الجداول المرفقة بنظم التوظف وما يضم ايه من علاوات.
                                    </li>
                                    <li>
                                    الحوافز.
                                    </li>
                                    <li>
                                    العمولات الرسمية.
                                    </li>
                                    <li>
                                    البدلات ما عدا البدلات الاتية:
                                    </li>
                                    <li>
                                    بدل الانتقال والسفر وغيرها من البدلات التي تصرف للمؤمن عليه مقابل ما يتكلفه من أعباء تفتضيها وظيفته ويستثني من ذلك بدل التمثيل.
                                    </li>
                                    <li>
                                    البدلات تستحق للمؤمن عليه لمواجهة أعباء المعيشة خارج البلاد.
                                    </li>
                                    <li>
                                    بدل السكن وبدل الملبس وبدل الوجبة وبدل السيارة وغيرها من البدلات التي تصرف مقابل مزايا عينية.
                                    </li>
                                  </ul>
                                  ويراعى الا يتجاوز قيمة مجموع ما يتم استبعاده من بدلان 25% من اجمالي أجر المؤمن عليه.
                                </div> <!-- End Accordion Body -->
                              </div> <!-- End Accordion Collapse -->
                            </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                            <div class="accordion-item animals2">
                              <h2 class="accordion-header" id="headingThreeee">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeee" aria-expanded="false" aria-controls="collapseThreeee">
                                ما هي نسبة الاشتراك في حالة الجمع بين أكثر من وظيفة ؟
                                </button>
                              </h2>
                              <div id="collapseThreeee" class="accordion-collapse collapse" aria-labelledby="headingThreeee" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                في حالة أن المؤمن عليه يعمل لدى أكثر من صاحب عمل فيعتبر كل ما يتقاضاه من كل صاحب عمل هو أجر الاشتراك.                                
                                </div> <!-- End Accordion Body -->
                              </div> <!-- End Accordion Collapse -->
                            </div> <!-- End Accordion Item -->
                          </div> <!-- End accordion parent (#accordionExample) -->

                      <!-- ******************************************************************************************* -->
                      <!-- ******************************************************************************************* -->
                
                      <!-- Start Fourth Section -->

                      <div class="faq-title2">
                          <h1 class="text-center font-weight-bold">
                              رابعًا : الأسئلة المتخصصة
                          </h1>
                      </div> <!-- End faq-title2 -->

                      <div class="search container mt-5" dir="rtl">
                        <input id="searchbar3" onkeyup="search_animal3()" type="text"
                        name="search" placeholder="بحث في الأسئلة">
      
                        <div class="accordion" id="accordionExample4">
                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading04">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="true" aria-controls="collapse04">
                              هل يتم الخصم من الأجر في حالة الزوجة موظفة أرملة والأبناء يحصلون على المعاش عن الأب المتوفى ؟
                              </button>
                            </h2>
                            <div id="collapse04" class="accordion-collapse collapse show" aria-labelledby="heading04" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              يتم خصم 1% من الأجر الشامل بالنسبة للزوجة الموظفة الأرملة ونسبة 2% من المعاش الشهري للأبناء.
                              </div>  <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading02">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                              من سيتحمل الأبناء في حالة الأم مطلقة والأب على المعاش؟
                              </button>
                            </h2>
                            <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              الذي يتحمل حصة الأبناء الأب حيث يخصم منه نسبة 1% من المعاش الشهري عن كل ابن بالإضافة الى حصته والذي تمثل نسبة 2% من المعاش الشهري
                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading03">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                              هل تتحمل الأم الأبناء في حالة ان الزوجة موظفة ومطلقة والزوج غير مؤمن عليه؟
                              </button>
                            </h2>
                            <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              نعم، حيث يخصم من الزوجة الموظفة حصتها بنسبة 1% من أجرها الشامل الى نسبة 1% عن كل ابن من الأبناء.
                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading004">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse004" aria-expanded="false" aria-controls="collapse004">
                              لو الأب أعمال حرة والأم موظفة هل تقيد الأولاد معها ويتم الخصم منها؟
                              </button>
                            </h2>
                            <div id="collapse004" class="accordion-collapse collapse" aria-labelledby="heading004" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              لو للزوج أعمال حرة ومؤمن عليه يتم خصم حصة الأولاد من الزوج، ويمكن للزوجة أن تختار أن تسجل الأبناء عليها وبحيث يخصم الاشتراكات الخاصة بهم من راتبها.                              </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading05">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                              لو الزوج غير مؤمن عليه هل الزوجة تتحمله؟
                              </button>
                            </h2>
                            <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              ذا كان لا يعمل تتحمل الزوجة عن زوجها وأبنائها.
                           </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading06">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                              إذا سجل ولي أمر أولادة في مكان عمله ولكن الأولاد تعمل ومؤمن عليهم في مكان اخر كيف يتم المحاسبة والخصم على الأب ام على الأولاد في جهة عملهم وهل نحسب على الاثنين؟                              
                              </button>
                            </h2>
                            <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              يخصم من الأب حصته من دخله، والأبناء العاملين يخصم من دخلهم وبالتالي لا يوجد ازدواج في الخصم. 
                           </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                          <!-- *************************************************************************************** -->

                          <div class="accordion-item animals3">
                            <h2 class="accordion-header" id="heading07">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                              الشركات المتعاقدة مع شركات رعاية طبية ما هو المطلوب منها؟
                              </button>
                            </h2>
                            <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                              نظام التأمين الصحي الشامل نظام الزامي لذا على الشركات المتعاقدة مع شركات رعاية طبية الالتزام بالاشتراك في المنظومة الجديدة، وتلتزم هيئة التأمين الصحي الشامل بشراء الخدمة الصحية لأصحاب نظم التأمين أو البرامج الصحية الخاصة سواء كانت الخدمة مقدمة بمستشفيات هيئة الرعاية الصحية أو بمستشفيات تلك النظم، وذلك وفقا لنظم التعاقد والأسعار والضوابط والإجراءات الخاصة بهيئة التأمين الصحي الشامل، وأيضا معايير الجودة التي تحددها هيئة الاعتماد والرقابة الصحية.

                              وفي حالة وجود بعض الخدمات الفندقية أو التكميلية غير المغطاة ضمن حزمة الخدمات الصحية يمكن استمرار التعاقد مع شركات الرعاية الطبية الخاصة لتوفير تلك الخدمات.   
                             </div> <!-- End Accordion Body -->
                            </div> <!-- End Accordion Collapse -->
                          </div> <!-- End Accordion Item -->

                        </div> <!-- End accordion parent (#accordionExample) -->

            </div> <!-- End Search Input -->
        </div> <!-- End faq-content2 -->
    </div> <!-- End Faq Section -->

    <!-- End FAQ Section -->

        <!-- Start Footer Section -->

        <footer class="bg-light text-center text-white" style="margin-top:50px; ">
          <!-- Grid container -->
          <div class=" p-4 pb-0">
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


      function search_animal1() {
        let input = document.getElementById('searchbar1').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('animals1');
        
        for (i = 0; i < x.length; i++) {
          if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";				
          }
        }
      }


      function search_animal2() {
        let input = document.getElementById('searchbar2').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('animals2');
        
        for (i = 0; i < x.length; i++) {
          if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";				
          }
        }
      }


      function search_animal3() {
        let input = document.getElementById('searchbar3').value
        input=input.toLowerCase();
        let x = document.getElementsByClassName('animals3');
        
        for (i = 0; i < x.length; i++) {
          if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
          }
          else {
            x[i].style.display="list-item";				
          }
        }
      }

      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>