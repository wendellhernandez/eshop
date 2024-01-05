<?php 
    if(isset($_SESSION['username'])){
        $username = htmlspecialchars($_SESSION['username']);
    }else{
        if($_SERVER['PHP_SELF'] === '/eshop/index.php'){

        }else{
            header('Location: ./');
        }
    }
?>

<div class="container">
    <div class="uppernav">
        <div class="uppernav-left">
            <a href="#">Download</a>
            <a href="#">Start Selling</a>
            <span>Follow us on</span>
            <a href="#" class="no-border"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="no-border"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="uppernav-right">
            <a href="#" class="no-border"><i class="fa-regular fa-bell"></i>&nbsp;&nbsp;Notification</a>
            <a href="#" class="no-border"><i class="fa-regular fa-circle-question"></i>&nbsp;&nbsp;Help</a>

            <?php if(isset($username)){ ?>
            <a href="account.php" class="link-bold no-border"><?php echo $username ?></a>
            <form action="handlers/logout_handler.inc.php" method="post">
                <input type="submit" value="logout">
            </form>
            <?php }else{ ?>
                <a href="signup.php" class="link-bold">Sign Up</a>
                <a href="login.php" class="link-bold no-border">Login</a>
            <?php } ?>
        </div>
    </div>
    <div class="lowernav">
        <a href="./" class="logo">
            <img src="assets/logo.png">
            <h1>eShop</h1>
        </a>
        <form class="search" action="index.php" method="get">
            <input type="text" name="search" placeholder="Sign up and get 100% off on your first order">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>

        <div class="cart-container">
            <a href="#" class="cart">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>0</span>
            </a>
        </div>
    </div>
</div>