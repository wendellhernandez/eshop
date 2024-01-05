<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once 'session_config.inc.php';

    session_unset();
    session_destroy();

    header('Location: ../');
    die();
}else{
    header('Location: ../');
}