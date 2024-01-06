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

    protected function setUser($username, $email, $password){
        try {
            $cost = [ 'cost' => 12 ];
            $passhash = password_hash($password, PASSWORD_BCRYPT, $cost);

            $sql = 'INSERT INTO users(username, email, password) VALUES (:username, :email, :passhash)';
            $stmt = parent::connect()->prepare($sql);
            $stmt->bindParam(':username' , $username);
            $stmt->bindParam(':email' , $email);
            $stmt->bindParam(':passhash' , $passhash);
            $stmt->execute();
        } catch (PDOException $e) {
            die('Query Failed: ' . $e->getMessage());
        }
    }
}