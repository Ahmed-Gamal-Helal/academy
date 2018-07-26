<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">طلب اعتماد عضوية مدربين</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->

    <!-- Plugin Link  -->
    <!-- https://www.jqueryscript.net/other/Flexible-Bootstrap-Plugin-To-Create-Wizard-Style-Interface-Smart-Wizard.html -->


    <div class="foming-wizzard">
        <div class="container">
            <form action="">
                <div id="smartwizard">
                    <ul class="form-wizard-ul">
                        <li><a href="#step-7"><span>1</span>البيانات الأساسيه</a></li>
                        <li><a href="#step-8"><span>2</span>المؤهلات العلميه</a></li>
                        <li><a href="#step-9"><span>3</span>المؤهلات التدريبيه</a></li>
                        <li><a href="#step-10"><span>4</span>بيانات التواصل</a></li>
                        <li><a href="#step-11"><span>5</span>وثائق اضافيه</a></li>
                        <li><a href="#step-12"><span>6</span>شروط و أحكام</a></li>
                    </ul>
                    <div>
                        <div id="step-7" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">الاسم <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="الاسم">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">البريد الالكترونى <span class="red">*</span></label>
                                    <input type="email" class="form-control wizard" id="" placeholder="البريد الالكترونى">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">نوع العضويه <span class="red">*</span></label>
                                    <select name="" id="" class="wizard">
                                        <option value="">-- اختر العضويه --</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">البطاقة الشخصية/ جواز السفر <span class="red">*</span> ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="" placeholder="البطاقه الشخصيه / جواز السفر">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">شهادة إعداد مدرب <span class="red">*</span> ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="" placeholder="البطاقه الشخصيه / جواز السفر">
                                </div>
                            </div>
                        </div>
                        <div id="step-8" class="global-changes">
                            <p class="add-delete">
                                <button class="add new">إضافة مؤهل</button>
                                <button class="delete-row">حذف</button>
                            </p>
                            <table class="table-responsive">
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المؤهل <span class="red">*</span></label>
                                                <select name="" id="" class="wizard">
                                                    <option value="">-- اختر المؤهل العلمى --</option>
                                                    <option value="">1</option>
                                                    <option value="">1</option>
                                                    <option value="">1</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">الكليه <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">التخصص <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">سنة التخرج <span class="red">*</span></label>
                                                <input type="number" class="form-control wizard" id="" value="2018">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المؤهل <span class="red">*</span></label>
                                                <select name="" id="" class="wizard">
                                                    <option value="">-- اختر المؤهل العلمى --</option>
                                                    <option value="">1</option>
                                                    <option value="">1</option>
                                                    <option value="">1</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">الكليه <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">التخصص <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">سنة التخرج <span class="red">*</span></label>
                                                <input type="number" class="form-control wizard" id="" value="2018">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="step-9" class="global-changes">
                            <p class="add-delete">
                                <button class="add new">إضافة مؤهل</button>
                                <button class="delete-row">حذف</button>
                            </p>
                            <table class="table-responsive">
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المؤهل <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المصدر <span class="red">*</span></label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">سنة التخرج <span class="red">*</span></label>
                                                <input type="number" class="form-control wizard" id="" value="2018">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="step-10" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">فيسبوك</label>
                                    <input type="text" class="form-control wizard" id="" value="https://www.facebook.com/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">تويتر</label>
                                    <input type="text" class="form-control wizard" id="" value="https://www.twitter.com/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">انستجرام</label>
                                    <input type="text" class="form-control wizard" id="" value="https://www.instagram.com/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">لنكدان</label>
                                    <input type="text" class="form-control wizard" id="" value = "https://www.linkedin.com/in/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">قناة اليوتيوب</label>
                                    <input type="text" class="form-control wizard" id="" value = "https://www.youtube.com/">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">الموقع الإلكتروني</label>
                                    <input type="text" class="form-control wizard" id="" placeholder="http://www.website.com">
                                </div>
                            </div>
                        </div>
                        <div id="step-11" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">الصورة الشخصية ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">السيرة الذاتية ( pdf, jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="margin-bottom-20">
                                        <input type="checkbox" name="" value=""> 
                                        <i></i> <span> أوافق على عرض الصورة الشخصية على موقع الاكاديمية ؟</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="step-12" class="global-changes">
                            <ul class="restrictions">
                                <li>1- بموجب العضوية الممنوحة أتعهد باحترام هوية الأكاديمية وتمثيلها على الوجه اللائق.</li>
                                <li>2- الالتزام بسياسات وقواعد الأكاديمية العالمية للتدريب والتطوير .</li>
                                <li>3- حال مخالفة أنظمة وقوانين الأكاديمية يتم إيقاف العضوية بعد تقديم إنذار عبر البريد الإلكتروني أو رسالة نصية قصيرة أو شفهيًا.</li>
                                <li>4- الالتزام بتحديث البيانات وإرفاق الطلبات "الحقائب التدريبية ـ أسماء المتدربين وأرقام شهاداتهم ـ أية بيانات أخرى".</li>
                                <li>5- الالتزام بقواعد وأدبيات المهنة السامية.</li>
                                <li>
                                    <label class="restricted-check">
                                        <input type="checkbox" name="agreement" id="" value="1" required=""> 
                                        <i></i> <span><span class="red">*</span> قرأت الشروط والأحكام العامة وأوافق على الإنضمام للاكاديمية العالمية للتدريب و التطوير المصريه GATD</span>
                                    </label>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
    include 'controllers/footer.php';
?>