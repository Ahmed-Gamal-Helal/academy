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
                <li class="active"><a href="wall-third.php">الحائط</a></li>
                <li><a href="nots-forth.php">تنويهات</a></li>
                <li><a href="about-subject.php">عن الماده</a></li>
                <li><a href="my-activity.php">نشاطى</a></li>
                </ul>
                <div class="tab-content">
                    <div id="wall-third" class="tab-pane fade in active">
                        <div class="container">
                            <div class="what-to-say">
                                <form action="" method = "">
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="6" placeholder="ما الذي تود قوله ؟ شارك برأيك هنا"></textarea>
                                    </div>
                                    <div class="publish-now">
                                        <button>انشر</button>
                                    </div>
                                    <div class="commented-people">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <div class="profile-image">
                                                    <a href="#">
                                                        <img src="images/004.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="profile-body">
                                                    <a href="#">وجدان عبدالرحمن حسن</a>
                                                    <p>وأنا هكذا ؟</p>
                                                </div>   
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="profile-likes">
                                                    <a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="commented-people">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <div class="profile-image">
                                                    <a href="#">
                                                        <img src="images/004.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="profile-body">
                                                    <a href="#">وجدان عبدالرحمن حسن</a>
                                                    <p>وأنا هكذا ؟</p>
                                                </div>   
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="profile-likes">
                                                    <a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="commented-people">
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <div class="profile-image">
                                                    <a href="#">
                                                        <img src="images/004.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="profile-body">
                                                    <a href="#">وجدان عبدالرحمن حسن</a>
                                                    <p>وأنا هكذا ؟</p>
                                                </div>   
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="profile-likes">
                                                    <a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="come-and-share">
                                        <p>شارك بتعليقك عن هذه المشاركه</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php
        include 'controllers/footer.php';
    ?>
    