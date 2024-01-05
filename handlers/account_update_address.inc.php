<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['street']) && !empty($_POST['barangay']) && !empty($_POST['city']) && !empty($_POST['province']) && !empty($_POST['postalcode'])){
        $users_id = $_SESSION['users_id'];
        $street_name = $_POST['street'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $postalcode = $_POST['postalcode'];

        include 'connection.inc.php';

        try {
            $sql = 'SELECT * FROM addresses WHERE users_id = :users_id;';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':users_id' , $users_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Query Failed: ' . $e->getMessage());
        }

        if($result){
            try {
                $sql = 'UPDATE addresses SET street_name = :street_name,barangay = :barangay,city = :city,province = :province,postal_code = :postal_code  WHERE users_id = :users_id;';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':users_id' , $users_id);
                $stmt->bindParam(':street_name' , $street_name);
                $stmt->bindParam(':barangay' , $barangay);
                $stmt->bindParam(':city' , $city);
                $stmt->bindParam(':province' , $province);
                $stmt->bindParam(':postal_code' , $postalcode);
                $stmt->execute();

                $pdo = NULL;
                $stmt = NULL;

                header('Location: ../account.php');

                die();
            } catch (PDOException $e) {
                die('Query Failed: ' . $e->getMessage());
            }
        }else{
            try {
                $sql = 'INSERT INTO addresses(users_id, street_name, barangay, city, province, postal_code) VALUES (:users_id, :street_name, :barangay, :city, :province, :postal_code);';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':users_id' , $users_id);
                $stmt->bindParam(':street_name' , $street_name);
                $stmt->bindParam(':barangay' , $barangay);
                $stmt->bindParam(':city' , $city);
                $stmt->bindParam(':province' , $province);
                $stmt->bindParam(':postal_code' , $postalcode);
                $stmt->execute();

                $pdo = NULL;
                $stmt = NULL;

                header('Location: ../account.php');

                die();
            } catch (PDOException $e) {
                die('Query Failed: ' . $e->getMessage());
            }
        }

    }else{
        header('Location: ../account.php?error=field_empty');
    }
}else{
    header('Location: ../');
}