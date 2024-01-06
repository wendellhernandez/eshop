<?php

class Signup_view{
    public function set_signup_input_error(){
        if(isset($_SESSION['signup_errors'])){
            $errors = $_SESSION['signup_errors'];

            foreach($errors as $err){
                echo '<p class="login-form-warning">'.$err.'</p>';
            }
        }
    }

    public function set_signup_success_message(){
        if(isset($_SESSION['signup_success'])){
                echo '<p class="login-form-warning">Registration Successful!</p>';

            unset($_SESSION['signup_success']);
        }
    }

    public function set_signup_input_value(){
        if(isset($_SESSION['signup_errors']) && isset($_SESSION['signup_data'])){
            $signup_data = $_SESSION['signup_data'];

            echo '
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="'.$signup_data['username'].'">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="'.$signup_data['email'].'">
            ';

            unset($_SESSION['signup_errors']);
            unset($_SESSION['signup_data']);
        }else{
            echo '
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            ';
        }
    }
}