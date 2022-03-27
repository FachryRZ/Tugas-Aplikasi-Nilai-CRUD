<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'nilai';
$con = mysqli_connect($host , $userdb, $passdb, $db);

//check connection
if (mysqli_connect_error()) {
    echo "kesalahan pada koneksi MySQL: " . mysqli_connect_error();
    exit();
} 
?>