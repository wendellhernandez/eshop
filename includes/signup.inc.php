<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    require_once '../page_includes/session_config.inc.php';
    require_once '../classes/Dbh.class.php';
    require_once '../classes/Signup_model.class.php';
    require_once '../classes/Signup_contr.class.php';
    $signup_contr = new Signup_contr();

    //ERROR HANDLERS
    $errors = [];

    if($signup_contr->is_input_empty($username, $email, $password, $confirmpassword)){
        $errors['input_empty'] = 'Fill in all fields!<br>';
    }
    if($signup_contr->is_username_taken($username)){
        $errors['username_taken'] = 'Username already taken!<br>';
    }
    if($signup_contr->is_email_invalid($email)){
        $errors['email_invalid'] = 'Invalid Email!<br>';
    }
    if($signup_contr->is_email_registered($username, $email)){
        $errors['email_registered'] = 'Email alredy registered!<br>';
    }
    if($signup_contr->does_password_not_match($username, $password, $confirmpassword)){
        $errors['password_not_match'] = 'Passwords does not match!<br>';
    }
    $signup_contr->is_there_errors($errors, $username, $email);

    //SIGNUP USER
    $signup_contr->signupUser($username, $email, $password);
    header('Location: ../signup.php');
    die();
}else{
    header('Location: ./');
}