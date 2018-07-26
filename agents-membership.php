 <?php
    include 'controllers/header.php';
?>

    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">طلب إعتماد إنتساب للوكلاء</a>
            </div>
        </div>
    </div>

    <div class="foming-wizzard">
        <div class="container">
            <form action="">
                <div id="smartwizard">
                    <ul class="form-wizard-ul">
                        <li><a href="#step-13"><span>1</span>البيانات الأساسيه</a></li>
                        <li><a href="#step-14"><span>2</span>الخطه التسويقيه</a></li>
                        <li><a href="#step-15"><span>3</span>عدد العضويات</a></li>
                        <li><a href="#step-16"><span>4</span>بيانات التواصل</a></li>
                        <li><a href="#step-17"><span>5</span>وثائق اضافيه</a></li>
                        <li><a href="#step-18"><span>6</span>شروط و أحكام</a></li>
                    </ul>
                    
                    <div>
                        <div id="step-13" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">الاسم <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="الاسم">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">اسم المؤسسه باللغه العربيه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="اسم المؤسسه باللغه العربيه">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">اسم المؤسسه باللغه الانجليزيه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="اسم المؤسسه باللغه الانجليزيه">
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
                                <div class="form-group col-md-12">
                                    <label for="">تعريف بالمؤسسة  <span class="red">*</span></label>
                                    <textarea name="" id="" cols="30" rows="6"></textarea>                                
                                </div>
                            </div>
                        </div>
                        <div id="step-14" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">آليات التسويق <span class="red">*</span></label>
                                    <textarea name="" id="" cols="30" rows="6"></textarea>                                
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">أدوات التسويق <span class="red">*</span></label>
                                    <select name="" id="" class="wizard equal-area">
                                        <option value="">-- اختر المؤهل العلمى --</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">المنطقه المستهدفه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="حوالة بنكية ، ويسترن يونيون ...الخ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">الفئات المستهدفه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="حوالة بنكية ، ويسترن يونيون ...الخ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">عدد المسوقين والمسوقات <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="حوالة بنكية ، ويسترن يونيون ...الخ">
                                </div>
                            </div>
                        </div>
                        <div id="step-15" class="global-changes">
                            <div class="col-sm-12">
                                <h5>العدد المتوقع للعضويات في السنة</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="">المدربين والمدربات <span class="red">*</span></label>
                                        <input type="number" class="form-control wizard" id="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">الأفراد <span class="red">*</span></label>
                                        <input type="number" class="form-control wizard" id="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">عدد المسوقين والمسوقات <span class="red">*</span></label>
                                        <input type="number" class="form-control wizard" id="" placeholder="">
                                    </div> 
                                    <div class="form-group col-md-3">
                                        <label for="">العدد الإجمالي للشهادات <span class="red">*</span></label>
                                        <input type="number" class="form-control wizard" id="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">اقتراحات أو ملاحظات</label>
                                        <textarea name="" id="" cols="30" rows="6"></textarea>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-16" class="global-changes">
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
                        <div id="step-17" class="global-changes">
                            <div class="form-group col-md-6">
                                <label for="">شعار المؤسسة ( jpg, png, gif )</label>
                                <input type="file" class="form-control wizard personal-passport" id="">
                            </div>
                        </div>
                        <div id="step-18" class="global-changes">
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