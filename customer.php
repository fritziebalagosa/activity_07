<?php

    session_start();

    if(isset($_SESSION['account'])){
        if($_SESSION['account']['is_staff']){
            header('location: login.php');
        }
    }else{
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
    <h2>Welcome Customer!</h2>
    <?php
        echo 'What should we do today? ' . $_SESSION['account']['first_name']; 
    ?> 
    <br><br>

    <a href="logout.php">Logout</a>

</body>
</html>