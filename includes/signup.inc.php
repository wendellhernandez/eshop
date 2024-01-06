<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    require_once '../classes/Dbh.class.php';
    require_once '../classes/Signup_model.class.php';
    require_once '../classes/Signup_contr.class.php';
    $signup_contr = new Signup_contr();

    //ERROR HANDLERS
    $error = [];

    if($signup_contr->is_input_empty($username, $email, $password, $confirmpassword)){
        $error['input_empty'] = 'Fill in all fields!<br>';
    }
    if($signup_contr->is_username_taken($username)){
        $error['username_taken'] = 'Username already taken!<br>';
    }
    if($signup_contr->is_email_invalid($email)){
        $error['email_invalid'] = 'Invalid Email!<br>';
    }
    if($signup_contr->is_email_registered($username, $email)){
        $error['email_registered'] = 'Email alredy registered!<br>';
    }
    if($signup_contr->does_password_not_match($username, $password, $confirmpassword)){
        $error['password_not_match'] = 'Passwords does not match!<br>';
    }

    if($error){
        foreach($error as $err){
            echo $err;
        }

        die();
    }

    

    die();
}else{
    header('Location: ./');
}