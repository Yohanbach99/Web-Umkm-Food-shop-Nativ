<?php
include "config.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "Anda belum login. Silakan login terlebih dahulu.";
    header('Location: login.php');
} else {
    $user_id = $_SESSION['user_id'];

    $query = "SELECT p.id, p.terkonfirmasi, p.nama_produk, p.jumlah, p.alamat, p.nomor_hp, p.total_harga 
              FROM pesanan p
              WHERE p.id_user = $user_id";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marirasa Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">

    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Permanent+Marker&display=swap" rel="stylesheet">

	<link href="https://fonts.gstatic.com" rel="preconnect"></link>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<style>
    /* Pengaturan border-collapse jenis,ukuran serta warna huruf secara keseluruhan tabel */
table{
    padding-left: center;
   
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
    margin-top:40px;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#b8a235;
    color:#DCDCDC;
    font-weight:bold;
    font-size:14px;
    margin-left: 4%;
    text-align: center;
}
 
h1{
            margin-top: 20px;
            margin-left: 4%;
            width: 30%;
           
            text-align: center;
            background-color: aliceblue;
            border-radius: 0px;
            letter-spacing: 9px;
            text-transform: uppercase;
            color: chocolate;
            font-size:25px;
            }
        
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:2px 7px;
    border:1px solid rgb(204, 192, 192);
    margin-left: 4%;
    
}
/* Mengatur warna baris */
table tr {
    background:rgb(204, 192, 192);
    
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:rgb(204, 192, 192);
}

@media screen and (min-width: 600px){
    h1{
        margin-left: 4px;
            width: 100%;
            border: 1px solid;
           font-size:15px;
            background-color: aliceblue;
            border-radius: 0px;
            letter-spacing: 3px;
         
            color: chocolate;
            }
}
</style>
<body>

</br></br></br></br>
<nav class="nav">
		<div class="nav-area">
			<a class="brand" href="">
				<span>Marirasa Shop </span>
			</a>
			<svg class="nav-burger" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
			<div class="nav-menu">
				<a href="index.php">Home</a>
				<a href="menu.php" >Menu</a>
             
                <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="tabel_user.php" class="active">Riwayat</a>';
        }
        ?>
				<!-- <a href="About.php">About</a> -->
                 <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
        ?>
 </nav>
    
    <?php
    if (isset($_SESSION['user_id'])) {
    ?>
   <table border="1">
   <h1>Data Pesanan</h1>
        <tr>
            <th>Nomor</th>
            <th>Terkonfirmasi</th> <!-- Kolom Terkonfirmasi -->
            <th>Item</th>
            <th>Jumlah Pesanan</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Total Harga</th>
            <th>Aksi</th> <!-- Kolom Aksi -->
        </tr>
    <?php
    $nomor = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $nomor++ . "</td>";
        echo "<td>" . ($row["terkonfirmasi"] == 1 ? "Ya" : "Tidak") . "</td>";
        echo "<td>" . $row["nama_produk"] . "</td>";
        echo "<td>" . $row["jumlah"] . "</td>";
        echo "<td>" . $row["alamat"] . "</td>";
        echo "<td>" . $row["nomor_hp"] . "</td>";
        echo "<td>Rp. " . number_format($row["total_harga"], 0, ',', '.') . ".000,-" . "</td>";
        echo "<td><a href='hapus_pesanan.php?id=" . $row["id"] . "'>Cencel</a></td>";
        echo "</tr>";
    }
    ?>
</table>
    <?php
    }
    ?>
    <script src="asset/script/main.js"></script>  
</body>
</html>
