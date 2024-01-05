<?php

function get_username($pdo, $username){
    $sql = 'SELECT username FROM users WHERE username = :username;';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function get_email($pdo, $email){
    $sql = 'SELECT email FROM users WHERE email = :email;';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function register_user($pdo, $username, $email, $password){
    $cost = [
        'cost' => 12
    ];

    $pass_hash = password_hash($password, PASSWORD_BCRYPT, $cost);

    $sql = 'INSERT INTO users(username, email, password) VALUES (:username, :email, :pass_hash);';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username' , $username);
    $stmt->bindParam(':email' , $email);
    $stmt->bindParam(':pass_hash' , $pass_hash);
    $stmt->execute();

    $pdo = NULL;
    $stmt = NULL;
}