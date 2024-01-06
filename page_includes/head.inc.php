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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Macondo and Manrope Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Favicon and CSS -->
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.min.css">