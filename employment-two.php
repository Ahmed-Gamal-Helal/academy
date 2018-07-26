<?php
    include 'controllers/header.php';
?>

        <!-- الرئيسيه -->
        <div class="main-home">
            <div class="container">
                <div class="search-tab">
                    <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                    <a href="#" class="sub-main-page">Jemy</a>
                </div>
            </div>
        </div>
        <!-- الرئيسيه -->

        <div class="employment-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <table class="table table-bordered" id="myTablea">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

<?php
    include 'controllers/footer.php';
?>
<script>
$(document).ready(function(){
    $('#myTablea').DataTable( { 
        "language": {
            "sProcessing":   "جارٍ التحميل...",
            "sLengthMenu":   "أظهر _MENU_ مدخلات",
            "sZeroRecords":  "لم يعثر على أية سجلات",
            "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
            "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
            "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
            "sInfoPostFix":  "",
            "sSearch":       "ابحث:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "الأول",
                "sPrevious": "السابق",
                "sNext":     "التالى",
                "sLast":     "الأخير"
            }
        }
    });
});
</script>