<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $confirmpass = $_POST['confirmpassword'];

        if($pass === $confirmpass){
            require_once 'connection.inc.php';

            $cost = ['cost' => 12];
            $hash = password_hash($pass, PASSWORD_BCRYPT , $cost);
            $sql = 'INSERT INTO users(username, email, password) VALUES(:username, :email, :pass);';

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username' , $username);
                $stmt->bindParam(':email' , $email);
                $stmt->bindParam(':pass' , $hash);
                $stmt->execute();

                $pdo = NULL;
                $stmt = NULL;

                header('Location: ../signup.php?register=success');

                die();
            } catch (PDOException $e) {
                die('Query Failed: ' . $e->getMessage());
            }
        }else{
            header('Location: ../signup.php?error=pass_not_match');
        }
    }else{
        header('Location: ../signup.php?error=field_empty');
    }
}else{
    header('Location: ../');
}