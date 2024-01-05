<?php

function check_signup_error(){
    if(isset($_SESSION['signup_error'])){
        $error = $_SESSION['signup_error'];

        foreach($error as $errors){
            echo "<p class='login-form-warning'>{$errors}</p>";
        }

        unset($_SESSION['signup_error']);
    }
}

function check_signup_success(){
    if(isset($_SESSION['signup_success'])){
        echo "<p class='login-form-warning'>Registration Complete</p>";

        unset($_SESSION['signup_success']);
    }
}

function get_signup_input_data(){
    if(isset($_SESSION['signup_data'])){
        echo '
        <label for="username">Username</label>
        <input required type="text" name="username" id="username" value="'.$_SESSION['signup_data']['username'].'">
        <label for="email">Email</label>
        <input required type="email" name="email" id="email" value="'.$_SESSION['signup_data']['email'].'">
        ';
        unset($_SESSION['signup_data']);
    }else{
        echo '
        <label for="username">Username</label>
        <input required type="text" name="username" id="username">
        <label for="email">Email</label>
        <input required type="email" name="email" id="email">
        ';
        unset($_SESSION['signup_data']);
    }
}