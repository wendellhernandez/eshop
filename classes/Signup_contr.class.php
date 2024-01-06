<?php

class Signup_contr extends Signup_model
{
    public function is_input_empty($username, $email, $password, $confirmpassword){
        if(empty($username) || empty($email) || empty($password) || empty($confirmpassword)){
            return true;
        }else{
            return false;
        }
    }

    public function is_username_taken($username){
        if(parent::getUser($username)){
            return true;
        }else{
            return false;
        }
    }

    public function is_email_invalid($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    public function is_email_registered($username, $email){
        $result = parent::getUser($username);

        if(!empty($result) && $email === $result['email']){
            return true;
        }else{
            return false;
        }
    }

    public function does_password_not_match($username, $password, $confirmpassword){
        $result = parent::getUser($username);

        if(!empty($result) && $password !== $confirmpassword){
            return true;
        }else{
            return false;
        }
    }

    public function is_there_errors($errors, $username, $email){
        if($errors){
            $_SESSION['signup_errors'] = $errors;
    
            $_SESSION['signup_data'] = [
                'username' => $username,
                'email' => $email
            ];
    
            header('Location: ../signup.php');
            die();
        }
    }

    public function signupUser($username, $email, $password){
        parent::setUser($username, $email, $password);

        $_SESSION['signup_success'] = true;
    }
}