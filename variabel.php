<?php

// $bilangan=1;

// function coba(){
//     global $bilangan=2;
//     echo "$bilangan ini adalah variabel global";
// }

// coba();
// echo "<br>";
// echo "$bilangan ini adalah variabel lokal";


//materi session
//session_start()


// variabel post
if(isset($_POST['submit'])){
   $nama = $_POST['nama'];
   $umur = $_POST['umur'];
   $alamat = $_POST['alamat'];

}

if(isset($_GET))
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">umur</label>
        <input type="text" name="umur">
        <br>
        <label for="">alamat</label>
        <input type="text" name="alamat">
        <br>
        <button name="submit">submit</button>
    </form>
    <a href="get.php?=edit">edit</a>
</body>
</html>