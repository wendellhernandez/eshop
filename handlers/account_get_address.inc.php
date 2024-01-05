<?php
include 'handlers/connection.inc.php';

$users_id = $_SESSION['users_id'];

try {
    $sql = 'SELECT * FROM addresses WHERE users_id = :users_id;';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':users_id' , $users_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $pdo = NULL;
    $stmt = NULL;
} catch (PDOException $e) {
    die('Query Failed: ' . $e->getMessage());
}