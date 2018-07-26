<div class="main-profile membership-data">
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#qualification-1">المؤهلات العلميه</a></li>
            <li><a data-toggle="tab" href="#qualifications-2">المؤهلات التدريبيه</a></li>
            <li><a data-toggle="tab" href="#qualifications-3">بيانات التواصل</a></li>
            <li><a data-toggle="tab" href="#qualifications-4">الوثائق والملفات</a></li>
        </ul>

        <div class="tab-content">
            <div id="qualification-1" class="tab-pane fade in active overflow-adjust">
                <div class="add-qualification">
                    <button type="button" class="btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-plus"></i></span>اضافة مؤهل جديد</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">إضافة المؤهلات العلمية</h4>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">اختر المؤهل<span class="red">*</span></label>
                                        <select name="" id="">
                                            <option value="" selected disabled>اختر ..</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">الكليه<span class="red">*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">التخصص<span class="red">*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">سنة التخرج<span class="red">*</span></label>
                                        <input type="text" placeholder="2017">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn-primary" data-dismiss="modal">حفظ</button>

                                <button type="button" class="btn-danger" data-dismiss="modal">اغلاق</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">المؤهل</th>
                            <th scope="col">المصدر</th>
                            <th scope="col">التخصص</th>
                            <th scope="col">السنه</th>
                            <th scope="col" class="text-center">الإجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">بكالريوس</th>
                            <td>جامعة المنصوره</td>
                            <td>اللغه الانجليزيه</td>
                            <td>2014</td>
                            <td class="text-center">
                                <a href="#"><i class='fa fa-edit fa-lg margin-left-8'></i></a>
                                <a href="#"><i class='fa fa-trash fa-lg'></i></a>  
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="qualifications-2" class="tab-pane fade overflow-adjust">
                <div class="add-qualification">
                    <button type="button" class="btn-info btn-lg" data-toggle="modal" data-target="#myModal-2"><span><i class="fa fa-plus"></i></span>اضافة مؤهل جديد</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal-2" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">إضافة المؤهلات التدريبية</h4>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">المؤهل<span class="red">*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">المصدر<span class="red">*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="">سنة التخرج<span class="red">*</span></label>
                                        <input type="text" placeholder="2017">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn-primary" data-dismiss="modal">حفظ</button>

                                <button type="button" class="btn-danger" data-dismiss="modal">اغلاق</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">المؤهل</th>
                            <th scope="col">المصدر</th>
                            <th scope="col">السنه</th>
                            <th scope="col" class="text-center">الإجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">بكالريوس</th>
                            <td>المملكه العربيه السعوديه</td>
                            <td>2018</td>
                            <td class="text-center">
                                <a href="#"><i class='fa fa-edit fa-lg margin-left-8'></i></a>
                                <a href="#"><i class='fa fa-trash fa-lg'></i></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="qualifications-3" class="tab-pane fade">
                <div class="social-contacts">
                    <form action="">
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
                            <div class="form-group text-center">
                                <button class="all-of-them">تحديث</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="qualifications-4" class="tab-pane fade">
                <div class="files-uploading">
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">الصوره الشخصية ( jpg, png, gif )</label>
                                <input type="file" class="form-control wizard padding-adjust" id="" placeholder="البطاقه الشخصيه / جواز السفر">
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">السيره الذاتيه ( PDF )</label>
                                <input type="file" class="form-control wizard padding-adjust" id="" placeholder="البطاقه الشخصيه / جواز السفر">
                            </div>
                        </div> 
                        <div class="form-group text-center">
                            <button class="all-of-them">تحديث</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>