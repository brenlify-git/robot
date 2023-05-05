<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="greetings">
       <h2 style="text-align: right;">Welcome, <?= $_SESSION["user"] ?></h2> 
    </div>
    <h1>Profile Page</h1>
    <a type="button" href="product.php">Product</a>
    <a type="button" href="logout.php">Logout</a>
</body>
</html>