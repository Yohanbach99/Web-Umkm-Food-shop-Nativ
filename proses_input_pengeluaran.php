<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pengeluaran = $_POST['pengeluaran'];
    $pengeluaranFormatted = number_format($pengeluaran, 0, '.', '');

    if ($pengeluaran < 0) {
        echo "Pengeluaran harus bilangan positif.";
    } else {
 
        $insertQuery = "INSERT INTO rekapan (tanggal, pengeluaran, pemasukan) VALUES (NOW(), $pengeluaran, 0)";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            header('Location: tabel_admin.php');
        } else {
            echo "Gagal menyimpan pengeluaran: " . mysqli_error($conn);
        }
    }
}
?>
