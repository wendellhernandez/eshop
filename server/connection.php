<?php

    $db_hostname = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_database = 'eshop_db';

    try{
        $conn = mysqli_connect($db_hostname, $db_user, $db_pass, $db_database);
        // echo 'connected to database';
    }catch(mysqli_sql_exception){
        echo 'cannot connect to database';
    }

?>