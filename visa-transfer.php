<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="index.php" class="main-page">الرئيسيه <span>></span></a>
                <a href="courses.php" class="main-heading">الدفع <span>></span></a>
                <a href="#" class="sub-main-page">فيزا</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->
    
    <div class="login-page payment-visa">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-paragraph text-center">
                        <img src="images/021.png" alt="">
                        <p class="conditios">رجاء ملئ النموذج لتتم عملية الدفع</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-login">
                        <form action="" method="">
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">الاسم الأول<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="الاسم الأول">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">الاسم الأخير<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="الاسم الأخير">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">البريد الإلكترونى<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" placeholder="البريد الإلكترونى">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">المنطقه / المحافظه <span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="المنطقه / المحافظه">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">الدوله <span>*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="" selected disabled>الدوله</option>
                                            <option>مصر</option>
                                            <option>السنغال</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">المدينه <span>*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option value="" selected disabled>المدينه</option>
                                            <option>المنوفيه</option>
                                            <option>الترعه</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">الرمز البريدى <span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="number" placeholder="الرقم بالانجليزى">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4">رقم  الهاتف <span>*</span></label>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="رقم الهاتف">
                                    </div>
                                    <div class="col-sm-2">
                                        <select class="form-control">
                                            <option value="" selected disabled>996</option>
                                            <option>20</option>
                                            <option>20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grouping">
                                <div class="row">
                                    <label for="" class="col-sm-4"> المبلغ<span>*</span></label>
                                    <div class="col-sm-8">
                                        <input type="number" placeholder=" المبلغ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grouping-btns">
                                <div class="row text-center">
                                    <button class="enter-login">ادفع الآن</button>
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
    