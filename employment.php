<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">التوظيف</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->

    <div class="login-page register-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-paragraph text-center">
                        <img src="images/028.png" alt="">
                        <p class="conditios-2">انضم للعمل معنا<br> الان</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-login">
                        <form action="" method="">
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">الاسم</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="الاسم كاملآ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">الجنسية</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option value="" selected>الجنسية</option>
                                            <option>مصري</option>
                                            <option>هندى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">العمر</label>
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="" selected>يوم</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="" selected>شهر</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control">
                                            <option value="" selected>سنه</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">المؤهل</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="المؤهل">
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">الجنس</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option value="" selected>الجنس</option>
                                            <option>ذكر</option>
                                            <option>انثى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">الخبرة</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option value="" selected>مستوى الخبرة</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">الايميل</label>
                                    <div class="col-sm-9">
                                        <input type="email" placeholder="الايميل">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">رقم الجوال</label>
                                    <div class="col-sm-9">
                                        <input type="number" placeholder="رقم الجوال">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-3">ارفاق السيره الذاتيه</label>
                                    <div class="col-sm-9">
                                        <input class="upload-it" type="file" name="" id="input-file-upload">
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping-btns">
                                <div class="row text-center">
                                    <button class="enter-login">تسجيل</button>
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