<?php
session_start();

if(isset($_SESSION["submit"])){
    header("location:dashboard.php");
}

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];
    if($username =="agung" && $password =="123"){
        $_SESSION["submit"] = true;
        header("location:dashboard.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form action="" method ="POST">
        <label for="">username</label>
        <input type="text" name="username">
        <br>
        <label for="">password</label>
        <input type="text" name="password">
        <br>
        <button type="submit" name="submit">login</button>
    </form>
</body>
</html>