<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = $_POST['username'];
            $pass = $_POST['password'];

            require_once 'connection.inc.php';

            $sql = 'SELECT * FROM users WHERE username = :username;';

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username' , $username);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $pdo = NULL;
                $stmt = NULL;
            } catch (PDOException $e) {
                die('Query Failed: ' . $e->getMessage());
            }

            if($row){
                if(password_verify($pass, $row['password'])){
                    $_SESSION['users_id'] = $row['users_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['reg_date'] = $row['reg_date'];

                    header('Location: ../index.php');
                }else{
                    $pdo = NULL;
                    $stmt = NULL;

                    header('Location: ../login.php?error=pass_not_match');

                    die();
                }
            }else{
                header('Location: ../login.php?error=no_user_found');
            }
        }else{
            header('Location: ../login.php');
        }
    }else{
        header('Location: ../');
    }