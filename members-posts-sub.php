
<div class="main-profile membership-data">
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#add-your-post">إضافة منشور</a></li>
            <li><a data-toggle="tab" href="#posts-archieve">أرشيف المنشورات</a></li>
        </ul>
        <div class="tab-content">
            <div id="add-your-post" class="tab-pane fade in active login-page register-page">
                <div class="form-login">
                    <form action="" method="">
                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">العنوان</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="العنوان">
                                </div>
                            </div>
                        </div>
                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">التفاصيل :</label>
                                <div class="col-sm-8">
                                <textarea id="editor" name="editor" ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">كلمات مفتاحيه :</label>
                                <div class="col-sm-8">
                                    <input type="text" placeholder="مثال أخبار / قضايا هامه">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">تاريخ النشر :</label>
                                <div class="col-sm-8">
                                <input type="date" class="datepicker" data-date-format="mm/dd/yyyy" data-provide="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">الصوره :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="padding-adjust" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-grouping">
                            <div class="row">
                                <label for="" class="col-sm-4">ملف / نشره تعريفيه ( PDF ) :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="padding-adjust" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-grouping">
                            <div class="row">
                            <label for="" class="col-sm-4"></label>
                                <label class="col-sm-8">
                                    <input type="checkbox" name="show_at_home" value="1"> 
                                    <span class="font-janna"> إظهار المنشور على الصفحة الرئيسية للاكاديمية (يجب موافقة الإدارة)</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-grouping-btns">
                            <div class="row text-center">
                                <button class="enter-login">حفظ البيانات</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="posts-archieve" class="tab-pane fade margin-adjust-table overflow-adjust">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">العنوان</th>
                            <th scope="col">تاريخ النشر</th>
                            <th scope="col">الحاله</th>
                            <th scope="col" class="text-center">الإجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">شارع الترعه</th>
                            <td>02-11-2018</td>
                            <td class="certified">معتمد</td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-envelope fa-lg margin-left-8"></i></a>
                                <a href="#"><i class="fa fa-trash fa-lg"></i></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>