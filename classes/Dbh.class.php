<?php

class Dbh{
    private $host = 'localhost';
    private $dbname = 'eshop_db';
    private $db_user = 'root';
    private $db_pass = '';

    protected function connect(){
        try {
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $pdo = new PDO($dsn, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            die('Connection Failed: ' . $e->getMessage());
        }
    }
}