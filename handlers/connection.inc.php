<?php
    $db_host = 'mysql:host=localhost; dbname=eshop_db';
    $db_username = 'root';
    $db_password = '';

    try {
        $pdo = new PDO($db_host , $db_username, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection Failed: ' . $e->getMessage();
    }
?>