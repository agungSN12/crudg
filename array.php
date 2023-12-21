<?php

// contoh array menggunakan index
$array1 = array('siti','widi', 'reva');

$array2 = ['riki','sudir','adel'];

// array menggunakan index
echo $array1[0]."<br>";
echo $array1[1]. "<br>";
echo $array1[2]. "<br>";

echo "<hr>";

// array menggunakan for
for($i=0; $i < count ($array1); $i++){
    echo $array1[$i]."<br>";
}

echo "<hr>";

// array menggunakan foreach
 foreach($array2 as $karyawan){
     echo $karyawan."<br>";
 }
echo "<hr>";


//contoh array menggunakan assosiatif
$karyawan=[
    "nik" => "001",
    "nama" => "agung",
    "umur" => "19"
];
echo "nik : ".$karyawan['nik']. "<br>";
echo "nama : ".$karyawan['nama']. "<br>";
echo "umur : ".$karyawan['umur']. "<br>";
echo "<hr>";


//contoh array multidimensi

$arraymulti =[
    ['001','wandi','informatika'],
    ['002','agung','informatika']
];

echo "nim              : ".$arraymulti[0][0]." <br>";
echo "nama             : ".$arraymulti[0][1]." <br>";
echo "departemen       : ".$arraymulti[0][2]." <br>";
echo "<hr>";
echo "nim              : ".$arraymulti[1][0]." <br>";
echo "nama             : ".$arraymulti[1][1]." <br>";
echo "departemen       : ".$arraymulti[1][2]." <br>";

echo"<hr>";


$karyawan=[
    [
        "nik" => "001",
        "nama" => "agung",
        "umur" => "19"
    ],

    [
        "nik" => "002",
        "nama" => "riki",
        "umur" => "19"
    ]
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach($karyawan as $emp) :?>

    <ul>
        <li>nik         : <?= $emp["nik"]; ?> </li>
        <li>name        :<?= $emp["nama"] ;?></li>
        <li>umur        :<?= $emp["umur"]; ?></li>
    </ul>
   
   <?php 
   endforeach;
   ?>


<table >
    <tr>
        <th>nik</th>
        <th>nama</th>
        <th>umur</th>
    </tr>

    <?php foreach($karyawan as $emp) : ?>
        <tr>
        <td><?= $emp["nik"]?></td>
        <td><?= $emp["nama"]?></td>
        <td><?= $emp["umur"]?></td>
        </tr>
    <?php
    endforeach
    ?>
</table>



</body>
</html>

