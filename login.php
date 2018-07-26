<?php
    include 'controllers/header.php';
?>

        <!-- الرئيسيه -->
        <div class="main-home">
            <div class="container">
                <div class="search-tab">
                    <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                    <a href="#" class="sub-main-page">تسجيل الدخول</a>
                </div>
            </div>
        </div>
        <!-- الرئيسيه -->

        <div class="login-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-paragraph text-center">
                            <img src="images/021.png" alt="">
                            <p>إذا كنت تملك حساب لدى الأكاديمية ، يمكنك تسجيل الدخول من خلال النموذج
                                    التالي</p>
                                    <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-login">
                            <form action="" method="">
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-5">اسم المستخدم أو البريد الإلكتروني</label>
                                        <div class="col-sm-7">
                                            <input type="text" placeholder="اسم المستخدم أو البريد الإلكتروني">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-5">كلمة المرور</label>
                                        <div class="col-sm-7">
                                            <input type="password" placeholder="كلمة المرور">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping">
                                    <div class="row">
                                        <div class="col-sm-12 text-left">
                                            <a href="forgot-pass.php" class="forgot-pass">نسيت كلمة المرور</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping-btns">
                                    <div class="row text-center">
                                        <button class="enter-login">دخول</button>
                                        <a href="register.php">تسجيل جديد</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php
        include 'controllers/footer.php';
    ?>
    