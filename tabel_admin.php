<?php
include "config.php";
session_start();

if (!isset($_SESSION['admin'])) {
    echo "Anda tidak memiliki izin untuk mengakses halaman ini.";
} else {
    $query = "SELECT p.id, u.username, u.email, p.nama, p.nama_produk, p.jumlah, p.total_harga, p.alamat, p.nomor_hp, p.terkonfirmasi
              FROM pesanan p
              JOIN users u ON p.id_user = u.id";

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
    <title>Data Pesanan (Admin)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<style>
    table{
        padding-left: 10px;
        font:normal normal 12px Verdana,Arial,Sans-Serif;
        color:#333333;
        margin-top:10px;
    }

    /* Mengatur warna latar, warna teks, ukuran font, dan jenis teks tebal (bold) pada header tabel */
    table th {
        background:#b8a235;
        color:#DCDCDC;
        font-weight:bold;
        font-size:12px;
    }

    h1 {
        margin-top:100px;
        margin-left: 0%;
        width: 20%;
        text-align: center;
        background-color: aliceblue;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: chocolate;
    }

    /* Mengatur border dan jarak/ruang pada kolom */

    /* Mengatur warna baris */
    table tr {
        background:rgb(204, 192, 192);
    }

    /* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
    table tr:nth-child(even) {
        background:rgb(204, 192, 192);
    }

    @media screen and (min-width: 600px){
        h1 {
            margin-left: 4px;
            width: 100%;
            font-size:20px;
            background-color: aliceblue;
            border-radius: 0px;
            letter-spacing: 3px;
            color: chocolate;
        }
        table th,
        table td {
            vertical-align:top;
            padding:2px 1px;
            border:1px solid rgb(204, 192, 192);
            margin-left: %;
        }
    }
</style>
<body>
<br><br><br><br>
<nav class="nav">
    <div class="nav-area">
        <a class="brand" href="">
            <span>Marirasa Shop </span>
        </a>
        <svg class="nav-burger" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
        </svg>
        <div class="nav-menu">
            <?php
            if (isset($_SESSION['admin'])) {
                echo '<a href="tabel_admin.php">Riwayat</a>';
            }
            ?>
            <?php
            if (isset($_SESSION['admin'])) {
                echo '<a href="logout.php">Logout</a>';
            } else {
                echo '<a href="login.php">Login</a>';
            }
            ?>
        </div>
    </div>
</nav>
<br><br>
<?php
if (isset($_SESSION['admin'])) {
?>
<form method="post" action="proses_konfirmasi.php">
    <h2>Data Pesanan dan Akun Pengguna</h2>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Username</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Item</th>
            <th>Jumlah Pesanan</th>
            <th>Total Harga</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Status</th>
        </tr>
        <?php
        $nomor = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $nomor++ . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["nama_produk"] . "</td>";
            echo "<td>" . $row["jumlah"] . "</td>";
            echo "<td>Rp. " . number_format($row["total_harga"], 0, ',', '.') . ".000,-" . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["nomor_hp"] . "</td>";
            echo "<td>";
            if ($row["terkonfirmasi"] == 1) {
                 echo "Lunas |";
            } else {
                echo "Belum";
            echo " | <input type='checkbox' name='konfirmasi[]' value='" . $row["id"] . "' onchange='toggleSimpan(this)'>";
            echo "<button type='submit' id='simpanButton' style='display:none;'>Simpan</button>";
                }
            echo "<button type='submit' name='hapus[]' value='" . $row["id"] . "' onclick='return confirmDelete();'><i class='fas fa-times'></i></button>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>
<script>
    function toggleSimpan(checkbox) {
        var simpanButton = checkbox.parentNode.querySelector('#simpanButton');
        if (checkbox.checked) {
            simpanButton.style.display = 'inline-block';
        } else {
            simpanButton.style.display = 'none';
        }
    }
        function confirmDelete() {
    var confirmation = confirm("Apakah Anda yakin ingin menghapus data ini?");
    return confirmation; 
}
</script>
<?php
}
?>

<?php
include "config.php";

function getTotalPengeluaran($conn) {
    $query = "SELECT SUM(pengeluaran) AS total_pengeluaran FROM rekapan";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result)['total_pengeluaran'];
    } else {
        return 0;
    }
}

$queryRekapan = "SELECT * FROM rekapan ORDER BY tanggal ASC";
$resultRekapan = mysqli_query($conn, $queryRekapan);

$totalPemasukan = 0;
$totalPengeluaran = getTotalPengeluaran($conn);

?>
<br><br>
<h2>Rekapan Keuangan</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Pemasukan</th>
        <th>Pengeluaran</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($resultRekapan)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>Rp. " . number_format($row['pemasukan'], 0, ',', '.') . "</td>";
        echo "<td>Rp. " . number_format($row['pengeluaran'], 0, ',', '.') . "</td>";
        $totalPemasukan += $row['pemasukan'];
        $totalPengeluaran += $row['pengeluaran'];
        $totalKeuangan = $totalPemasukan - $totalPengeluaran;
        echo "<td>Rp. " . number_format($totalKeuangan, 0, ',', '.' ) . "</td>";
        echo "</tr>";
    }
    ?>
    <form method="post" action="proses_input_pengeluaran.php"> 
        <label for="pengeluaran">Pengeluaran:</label>
        <input type="number" id="pengeluaran" name="pengeluaran" required>
        <button type="submit">Simpan</button>
    </form>
</table>
<script src="asset/script/main.js"></script>
</body>
</html>
