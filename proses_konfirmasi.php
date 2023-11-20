<?php
include "config.php";
session_start();

if (isset($_SESSION['admin'])) {
    if (isset($_POST['konfirmasi'])) {
        $pesananTerkonfirmasi = $_POST['konfirmasi'];

        foreach ($pesananTerkonfirmasi as $idPesanan) {
            
            $query = "UPDATE pesanan SET terkonfirmasi = 1 WHERE id = $idPesanan";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query error: " . mysqli_error($conn));
            }
        }
    }

    if (isset($_POST['hapus'])) {
        $pesananDihapus = $_POST['hapus'];

        foreach ($pesananDihapus as $idPesanan) {
          
            $query = "DELETE FROM pesanan WHERE id = $idPesanan";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query error: " . mysqli_error($conn));
            }
        }
    }
    if (isset($_POST['konfirmasi'])) {
        $konfirmasiPesanan = $_POST['konfirmasi'];
        $totalPemasukan = 0; // Inisialisasi total pemasukan
    
        foreach ($konfirmasiPesanan as $idPesanan) {
            // Update status pesanan menjadi "Sudah"
            $updateStatusQuery = "UPDATE pesanan SET terkonfirmasi = 1 WHERE id = $idPesanan";
            $updateStatusResult = mysqli_query($conn, $updateStatusQuery);
    
            if (!$updateStatusResult) {
                die("Query error: " . mysqli_error($conn));
            }
    
            // Ambil total harga dari pesanan yang dikonfirmasi
            $getTotalHargaQuery = "SELECT total_harga FROM pesanan WHERE id = $idPesanan";
            $getTotalHargaResult = mysqli_query($conn, $getTotalHargaQuery);
    
            if (!$getTotalHargaResult) {
                die("Query error: " . mysqli_error($conn));
            }
    
            $totalHarga = mysqli_fetch_assoc($getTotalHargaResult)['total_harga'];
            $totalPemasukan += $totalHarga; // Akumulasi total pemasukan
        }
    
        // Tanggal saat ini
        $tanggalHariIni = date("Y-m-d");
    
        // Perbarui tabel rekapan keuangan
        $updateRekapanQuery = "INSERT INTO rekapan (tanggal, pemasukan) VALUES ('$tanggalHariIni', $totalPemasukan)
            ON DUPLICATE KEY UPDATE pemasukan = pemasukan + $totalPemasukan";
        $updateRekapanResult = mysqli_query($conn, $updateRekapanQuery);
    
        if (!$updateRekapanResult) {
            die("Query error: " . mysqli_error($conn));
        }
    
    }

    header('Location: tabel_admin.php');
    exit;
} else {
    echo "Akses ditolak.";
}
?>
