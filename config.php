<?php
$host = "localhost"; 
$username = "id21352230_marirasashop";
$password = "Marirasa12*_*";
$database = "id21352230_marirasa"; 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
