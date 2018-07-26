<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">طلب اعتماد عضوية مؤسسات</a>
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
                        <li><a href="#step-1"><span>1</span>البيانات الأساسيه</a></li>
                        <li><a href="#step-2"><span>2</span>بيانات اضافيه</a></li>
                        <li><a href="#step-3"><span>3</span>بيانات المدير</a></li>
                        <li><a href="#step-4"><span>4</span>بيانات التواصل</a></li>
                        <li><a href="#step-5"><span>5</span>وثائق اضافيه</a></li>
                        <li><a href="#step-6"><span>6</span>شروط و أحكام</a></li>
                    </ul>
                    
                    <div>
                        <div id="step-1" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="">الاسم <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="الاسم">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">البريد الالكترونى <span class="red">*</span></label>
                                    <input type="email" class="form-control wizard" id="" placeholder="البريد الالكترونى">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">اسم المؤسسه باللغه العربيه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="اسم المؤسسه باللغه العربيه">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">اسم المؤسسه باللغه الانجليزيه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="اسم المؤسسه باللغه الانجليزيه">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">رقم الهاتف <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="رقم الهاتف">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">البريد الالكترونى للمؤسسه <span class="red">*</span></label>
                                    <input type="email" class="form-control wizard" id="" placeholder="البريد الالكترونى للمؤسسه">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">نوع العضويه <span class="red">*</span></label>
                                    <input type="text" class="form-control wizard" id="" placeholder="نوع العضويه">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">البطاقه الشخصيه / جواز السفر <span class="red">*</span></label>
                                    <input type="file" class="form-control wizard personal-passport" id="" placeholder="البطاقه الشخصيه / جواز السفر">
                                </div>
                            </div>
                        </div>
                        <div id="step-2" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">رقم الترخيص</label>
                                    <input type="number" class="form-control wizard" id="" placeholder="رقم الترخيص">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="">تاريخ التأسيس</label>
                                    <input type="date" class="form-control wizard" id="" placeholder="تاريخ التأسيس">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">نوع الحوالة</label>
                                    <input type="text" class="form-control wizard" id="" placeholder="حوالة بنكية ، ويسترن يونيون ...الخ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">صورة عن الحوالة ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="" placeholder="صورة عن الحوالة ( jpg, png, gif )">
                                </div>
                            </div>
                        </div>
                        <div id="step-3" class="global-changes">
                            <p class="add-delete">
                                <button class="add new">إضافة جديد</button>
                                <button class="delete-row">حذف</button>
                            </p>
                            <table class="table-responsive">
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">اسم الشخص المسؤول</label>
                                                <input type="text" class="form-control wizard" id="" value="هانى السيد سعد">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المسمى الوظيفي</label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">رقم الجوال</label>
                                                <input type="text" class="form-control wizard" id="" value="20154254151">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">البريد الإلكتروني </label>
                                                <input type="text" class="form-control wizard" id="" value="3d8e0766@mozej.com">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">اسم الشخص المسؤول</label>
                                                <input type="text" class="form-control wizard" id="" value="هانى السيد سعد">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">المسمى الوظيفي</label>
                                                <input type="text" class="form-control wizard" id="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">رقم الجوال</label>
                                                <input type="text" class="form-control wizard" id="" value="20154254151">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label for="">البريد الإلكتروني </label>
                                                <input type="text" class="form-control wizard" id="" value="3d8e0766@mozej.com">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="step-4" class="global-changes">
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
                        <div id="step-5" class="global-changes">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">شعار المؤسسة ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">ترخيص المؤسسة / السجل التجاري ( jpg, png, gif )</label>
                                    <input type="file" class="form-control wizard personal-passport" id="">
                                </div>
                            </div>
                        </div>
                        <div id="step-6" class="global-changes">
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