<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="index.php" class="main-page">الرئيسيه <span>&gt;</span></a>
                <a href="#" class="sub-main-page">الدفع</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->

    <div class="payment-methods text-center">
        <div class="container">
            <h4>برجاء اختيار طريقه الدفع المناسبه لك</h4>
            <div class="row">
                <div class="col-sm-6">
                    <div class="bank-transfer">
                        <a href="bank-transfer.php">
                            <img src="images/029.png" alt="">
                            <h3>تحويل بنكى</h3>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="visa-transfer">
                        <a href="visa-transfer.php">
                            <img src="images/030.png" alt="">
                            <h3>فيزا</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php
    include 'controllers/footer.php';
?>
    