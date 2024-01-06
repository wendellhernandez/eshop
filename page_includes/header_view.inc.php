<?php

function show_header_account_navbar(){
    if(isset($_SESSION['logged_in'])){
        echo '
        <a href="account.php" class="link-bold no-border">'.$_SESSION['username'].'</a>
        <form action="handlers/logout.inc.php" method="post">
            <input type="submit" value="logout">
        </form>
        ';
    }else{
        echo '
        <a href="signup.php" class="link-bold">Sign Up</a>
        <a href="login.php" class="link-bold no-border">Login</a>
        ';
    }
}