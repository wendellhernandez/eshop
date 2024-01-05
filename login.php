<?php
    if(isset($_SESSION['logged_in'])){ 
        header('location: ./');
    }

    include 'includes/head.inc.php';
?>

    <title>Log In now to start shopping! - eShop Philippines</title>
</head>
<body>
    <main>
        <section class="login-header-section">
            <div class="login-header-container">
                <a href="login.php" class="login-header-logo">
                    <img src="assets/logo.png">
                    <h1>eShop</h1>
                    <h1>Log In</h1>
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
                        <h2>Log In</h2>
                        <img src="assets/login/login-pass.png">
                    </div>
                    <form action="handlers/login_handler.inc.php" method="post">
                        <label for="username">Username</label>
                        <input required type="text" name="username" id="username">
                        <label for="password">Password</label>
                        <input required type="password" name="password" id="password">
                        <input type="submit" value="LOG IN">
                    </form>
                    <p class="login-form-haveAccount">
                        New to eShop? 
                        <a href="signup.php">Sign Up</a>
                    </p>
                </div>
            </div>
        </section>
 
        <section class="login-download-section">
            <p>ESHOP APP DOWNLOAD</p>
            <img src="assets/login/download.png">
        </section>
    </main>

    <?php include 'includes/footer.inc.php'; ?>

    <script src="scripts/login.js"></script>
</body>
</html>