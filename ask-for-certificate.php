<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">طلب شهاده</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->

    <div class="login-page register-page certificate-ask">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-paragraph text-center">
                        <img src="images/028.png" alt="">
                        <p class="conditios-2">اطلب شهادتك <br> الان</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-login">
                        <form action="" method="">
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">عنوان الدورة <span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="" selected disabled>عنوان الدورة </option>
                                            <option>مصري</option>
                                            <option>هندى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">عدد الشهادات <span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="number" placeholder="عدد الشهادات">
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">نوع الشهاده <span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="" selected disabled>شهاده ورقيه - طباعه </option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">إرسال الشهاده الإلكترونيه لـ  <span class="red">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="" selected disabled>المدرب </option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
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