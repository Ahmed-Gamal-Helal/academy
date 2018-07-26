<?php
    include 'controllers/header.php';
?>

        <!-- الرئيسيه -->
        <div class="main-home">
            <div class="container">
                <div class="search-tab">
                    <a href="index.php" class="main-page">الرئيسيه <span>></span></a>
                    <a href="courses.php" class="main-heading">الدفع <span>></span></a>
                    <a href="#" class="sub-main-page">تحويل بنكى</a>
                </div>
            </div>
        </div>
        <!-- الرئيسيه -->
        <div class="bank-examples">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="bank-division">
                            <h5 class="text-center"><a href="#">بنك الائتمان</a></h5>
                            <ul>
                                <li>اسم صاحب الحساب : <span>أحمد على</span></li>
                                <li>رقم الحساب : <span>3516546514515</span></li>
                                <li>رقم الأيبان : <span>SA32165465432165</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bank-division">
                            <h5 class="text-center"><a href="#">بنك الرياض</a></h5>
                            <ul>
                                <li>اسم صاحب الحساب : <span>أحمد على</span></li>
                                <li>رقم الحساب : <span>3516546514515</span></li>
                                <li>رقم الأيبان : <span>SA32165465432165</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="bank-division">
                            <h5 class="text-center"><a href="#">بنك الأهلى التجارى</a></h5>
                            <ul>
                                <li>اسم صاحب الحساب : <span>أحمد على</span></li>
                                <li>رقم الحساب : <span>3516546514515</span></li>
                                <li>رقم الأيبان : <span>SA32165465432165</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-page payment-bank-trans">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-paragraph text-center">
                            <img src="images/021.png" alt="">
                            <p class="conditios">يجب ان تكون قد حولت المبلغ ولديك معلومات لملء هذا النموذج</p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-login">
                            <form action="" method="">
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4">اختيار البنك <span>*</span></label>
                                        <div class="col-sm-8">
                                            <select class="form-control">
                                                <option value="" selected disabled>رجاء اختيار البنك</option>
                                                <option>الاهلى</option>
                                                <option>المصري</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4">اسم المحول <span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" placeholder="اسم المحول">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4">رقم العمليه <span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" placeholder="رقم العمليه">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4">مبلغ التحويل <span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" placeholder="مبلغ التحويل">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4"> رقم العمليه<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" placeholder=" رقم العمليه">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-grouping">
                                    <div class="row">
                                        <label for="" class="col-sm-4">يوم التحويل <span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="date" placeholder="">
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
    