<?php

function get_username($pdo, $username){
    $sql = 'SELECT username FROM users WHERE username = :username;';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function check_username_password($pdo, $username, $password){
    $sql = 'SELECT username, password FROM users WHERE username = :username;';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return password_verify($password, $result['password']);
}

function get_users_table_data($pdo, $username){
    $sql = 'SELECT * FROM users WHERE username = :username;';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}