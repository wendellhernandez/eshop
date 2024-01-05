<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    try {
        require_once 'connection.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_ctrl.inc.php';

        //ERROR HANDLERS
        $error = [];

        if(is_input_empty($username, $email, $password, $confirmpassword)){
            $error['input_empty'] = 'Fill in all fields!';
        }
        if(is_email_invalid($email)){
            $error['email_invalid'] = 'Invalid email!';
        }
        if(is_username_taken($pdo, $username)){
            $error['username_taken'] = 'Username already taken!';
        }
        if(is_email_taken($pdo, $email)){
            $error['email_taken'] = 'Email already registered!';
        }
        if(is_password_not_match($password, $confirmpassword)){
            $error['password_not_match'] = 'Password does not match!';
        }

        require_once 'session_config.inc.php';

        if($error){
            $_SESSION['signup_error'] = $error;
            $_SESSION['signup_data'] = [
                'username' => $username,
                'email' => $email
            ];
            header('Location: ../signup.php');
            die();
        }

        register_user($pdo, $username, $email, $password);
        $_SESSION['signup_success'] = "success";
        header('Location: ../signup.php');
        die();
    } catch (PDOException $e) {
        die('Query Failed: ' . $e->getMessage());
    }
}else{
    header('Location: ../');
}