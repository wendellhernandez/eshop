<?php

function if_logged_in_gobackto_index(){
    if(isset($_SESSION['logged_in'])){ 
        header('location: ./');
    }
}

function if_not_logged_in_gobackto_index(){
    if(isset($_SESSION['logged_in'])){
        $username = htmlspecialchars($_SESSION['username']);
    }else{
        if($_SERVER['PHP_SELF'] === '/eshop/index.php'){

        }else{
            header('Location: ./');
        }
    }
}