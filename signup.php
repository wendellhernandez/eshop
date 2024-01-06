<?php
    require_once 'page_includes/head.inc.php';
    require_once 'classes/Signup_view.class.php';
    $signup_view = new Signup_view();

    if_logged_in_gobackto_index();
?>
    <title>Sign Up today! - eShop Philippines</title>
</head>
<body>
    <main>
        <section class="login-header-section">
            <div class="login-header-container">
                <a href="./" class="login-header-logo">
                    <img src="assets/logo.png">
                    <h1>eShop</h1>
                    <h1>Sign Up</h1>
                </a>
            </div>
        </section>

        <section class="login-main-section">
            <div class="login-main-container">
                <div class="login-main-left">
                    <img src="assets/logowhite.png">
                    <h1>eShop</h1>
                    <h2>The leading online shopping platform in the World</h2>
                </div>

                <div class="login-main-right">
                    <div class="login-form-top">
                        <h2>Sign Up</h2>
                    </div>
                        
                    <?php
                        $signup_view->set_signup_input_error();
                        $signup_view->set_signup_success_message();
                    ?>

                    <form action="includes/signup.inc.php" method="post">
                        <?php $signup_view->set_signup_input_value(); ?>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword">
                        <input type="submit" value="SIGN UP">
                    </form>

                    <p class="login-form-haveAccount">
                        Have an account?
                        <a href="login.php">Log In</a>
                    </p>
                </div>
            </div>
        </section>
        
        <section class="login-download-section">
            <p>ESHOP APP DOWNLOAD</p>
            <img src="assets/login/download.png">
        </section>
    </main>

    <?php include 'page_includes/footer.inc.php'; ?>
    <!-- <script src="scripts/login.js"></script> -->
</body>
</html>