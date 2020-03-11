<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Pgae</title>
</head>
<body>
<a href="logout.php">LOGout</a>
    <H1>Welcome</H1>
    
</body>
</html>