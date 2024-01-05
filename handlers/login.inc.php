<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        require_once 'session_config.inc.php';
        require_once 'connection.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_ctrl.inc.php';

        //ERROR HANDLERS
        $errors = [];

        if(is_login_input_empty($username, $password)){
            $errors['login_input_empty'] = 'Fill in all fields!';
        }
        if(is_user_not_registered($pdo, $username)){
            $errors['user_not_registered'] = 'User is not registered!';
        }
        if(is_password_wrong($pdo, $username, $password)){
            $errors['password_wrong'] = 'Password does not match!';
        }

        if($errors){
            $_SESSION['login_errors'] = $errors;
            $_SESSION['login_data'] = $username;
            header('Location: ../login.php');
            die();
        }

        $users_table_data = get_users_table_data($pdo, $username);

        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $users_table_data['user_id'];
        $_SESSION['username'] = $users_table_data['username'];
        $_SESSION['email'] = $users_table_data['email'];
        $_SESSION['reg_date'] = $users_table_data['reg_date'];
        
        header('Location: ../');
        die();

    } catch (PDOException $e) {
        die('Query Failed: ' . $e->getMessage());
    }
}else{
    header('Location: ../');
}