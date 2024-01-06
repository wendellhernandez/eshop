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

            <?php
                require_once 'header_view.inc.php';

                show_header_account_navbar();
            ?>

            
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