<?php

class Signup_model extends Dbh{
    protected function getUser($username){
        try {
            $sql = 'SELECT * FROM users WHERE username = :username;';
            $stmt = parent::connect()->prepare($sql);
            $stmt->bindParam(':username' , $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            die('Query Failed: ' . $e->getMessage());
        }
    }
}