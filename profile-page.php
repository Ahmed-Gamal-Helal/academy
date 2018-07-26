<?php
    include 'controllers/header.php';
?>

    <!-- الرئيسيه -->
    <div class="main-home">
        <div class="container">
            <div class="search-tab">
                <a href="#" class="main-page">الرئيسيه <span>></span> </a>
                <a href="#" class="sub-main-page">ابراهيم عبدالله البركاتى</a>
            </div>
        </div>
    </div>
    <!-- الرئيسيه -->

    <?php
        include 'controllers/profile-side-menu.php';
    ?>
            <div class="col-sm-9">
                <div class="login-page register-page main-profile" id="ssaaaa">
                    <?php
                        include 'profile-page-2.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>