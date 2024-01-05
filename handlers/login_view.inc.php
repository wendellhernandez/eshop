<?php

function get_login_errors(){
    if(isset($_SESSION['login_errors'])){
        $login_error = $_SESSION['login_errors'];

        foreach($login_error as $error){
            echo "<p class='login-form-warning'>{$error}</p>";
        }

        unset($_SESSION['login_errors']);
    }
}

function set_login_input_data(){
    if(isset($_SESSION['login_data'])){
        $username = $_SESSION['login_data'];

        echo '
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="'.$username.'">
        ';

        unset($_SESSION['login_data']);
    }else{
        echo '
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        ';
    }
}