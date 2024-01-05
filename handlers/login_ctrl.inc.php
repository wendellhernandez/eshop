<?php

function is_login_input_empty($username, $password){
    if(empty($username) || empty($password)){
        return true;
    }else{
        return false;
    }
}

function is_user_not_registered($pdo, $username){
    if(!get_username($pdo, $username)){
        return true;
    }else{
        return false;
    }
}

function is_password_wrong($pdo, $username, $password){
    if(!check_username_password($pdo, $username, $password)){
        return true;
    }else{
        return false;
    }
}