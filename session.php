<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Page</title>
    <style>
        a{
            color: #816969 ;
            text-decoration: none;
            font-size: 24px;
        }
        a:hover {
            text-decoration: underline;
        }
        body{
            margin: 30px;
        }
    </style>   
</head>
<body>
    <h1> Hello, you have been authenticated by the "login.php" page.</h1>
    <a href="disconnection.php">Logout</a>
</body>
</html>