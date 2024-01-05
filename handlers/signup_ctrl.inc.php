<?php

function is_input_empty($username, $email, $password, $confirmpassword){
    if(empty($username) || empty($email) || empty($password) || empty($confirmpassword)){
        return true;
    }else{
        return false;
    }
}

function is_email_invalid($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

function is_username_taken($pdo, $username){
    if(get_username($pdo, $username)){
        return true;
    }else{
        return false;
    }
}

function is_email_taken($pdo, $email){
    if(get_email($pdo, $email)){
        return true;
    }else{
        return false;
    }
}

function is_password_not_match($password, $confirmpassword){
    if($password !== $confirmpassword){
        return true;
    }else{
        return false;
    }
}