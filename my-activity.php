<?php
    include 'controllers/header.php';
?>

        <!-- الرئيسيه -->
        <div class="main-home">
            <div class="container">
                <div class="search-tab">
                    <a href="index.php" class="main-page">الرئيسيه <span>></span></a>
                    <a href="courses.php" class="main-heading">الدورات <span>></span></a>
                    <a href="#" class="sub-main-page">التسويق الالكترونى</a>
                </div>
            </div>
        </div>
        <!-- الرئيسيه -->

        <div class="first-tab-view">
            <div class="container">
                <ul class="nav nav-tabs">
                <li><a href="course-contents.php">المحتويات</a></li>
                <li><a href="discussions-second.php">نقاشات</a></li>
                <li><a href="wall-third.php">الحائط</a></li>
                <li><a href="nots-forth.php">تنويهات</a></li>
                <li><a href="about-subject.php">عن الماده</a></li>
                <li class="active"><a href="my-activity.php">نشاطى</a></li>
                </ul>
                <div class="tab-content">
                    <div id="my-activity" class="tab-pane fade in active">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-xs-3">
                                    <div class="percentage-bar">
                                        <div class="progress-bar1" data-percent="20" data-duration="2500" data-color="#d8ac08,#FFF"></div>
                                    </div>  
                                    <span class="head-tail">شاهد <span>2</span> محتوى من <span>20</span></span>                                  
                                </div>
                                <div class="col-xs-3">
                                    <div class="percentage-bar">
                                        <div class="progress-bar1" data-percent="20" data-duration="2500" data-color="#d8ac08,#FFF"></div>
                                    </div>
                                    <span class="head-tail">شاهد <span>2</span> محتوى من <span>20</span></span>                                  
                                </div>
                                <div class="col-xs-3">
                                    <div class="percentage-bar">
                                        <div class="progress-bar1" data-percent="20" data-duration="2500" data-color="#d8ac08,#FFF"></div>
                                    </div>
                                    <span class="head-tail">شاهد <span>2</span> محتوى من <span>20</span></span>                                  
                                </div>
                                <div class="col-xs-3">
                                    <div class="percentage-bar">
                                        <div class="progress-bar1" data-percent="100" data-duration="2500" data-color="#d8ac08,#FFF"></div>
                                    </div>
                                    <span class="head-tail">شاهد <span>2</span> محتوى من <span>20</span></span>                                  
                                </div>
                            </div>
                            
                            <div class="contents-delivered adjust-your-margin">
                                <h4>محتويات تمت مشاهدتها</h4>
                                <p class="text-center">لم يقم باكمال أى محتوى بعد</p>
                            </div>
                            <div class="contents-delivered">
                                <h4>مهام تم تسليمها</h4>
                                <p class="text-center">لم يقم باكمال أى محتوى بعد</p>
                            </div>
                            <div class="contents-delivered">
                                <h4>تقارير تم رفعها</h4>
                                <p class="text-center">لم يقم باكمال أى محتوى بعد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php
        include 'controllers/footer.php';
    ?>
    