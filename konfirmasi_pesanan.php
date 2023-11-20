<?php
session_start();
$user_id = $_SESSION['user_id'];

$nama_produk = $_POST['nama_produk'];
$jumlah = $_POST['jumlah'];
$total_harga = $_POST['total_harga'];

$query = "INSERT INTO pesanan (id_user, nama, alamat, nomor_hp, nama_produk, jumlah, total_harga) VALUES (?, ?, ?, ?, ?, ?, ?)";

include('config.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor_hp = $_POST['nomor_hp'];

$stmt = mysqli_prepare($conn, $query);

for ($i = 0; $i < count($nama_produk); $i++) {
    mysqli_stmt_bind_param($stmt, 'issssid', $user_id, $nama, $alamat, $nomor_hp, $nama_produk[$i], $jumlah[$i], $total_harga[$i]);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Data gagal disimpan.";
    }
}

mysqli_stmt_close($stmt);

$telegramBotToken = '6683450447:AAF6cAVUuoK024fGNgeDDqBcVELKrRsxAHY'; 
$chatId = '-1001919001412'; 

$pesan = "Pesanan baru dari:\n\n";
$pesan .= "Nama: $nama\n";
$pesan .= "Alamat: $alamat\n";
$pesan .= "Nomor HP: $nomor_hp\n\n";
$pesan .= "Pesanan:\n";

for ($i = 0; $i < count($nama_produk); $i++) {
    $pesan .= "- $nama_produk[$i] (Jumlah: $jumlah[$i])\n";
}

$pesan .= "\nTotal Harga: Rp " . number_format(array_sum($total_harga), 3) . ",-" ;

// Kirim pesan ke Telegram
$url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($pesan);

$result = file_get_contents($url);

if ($result) {
    echo "Notifikasi berhasil dikirim ke Telegram.";
} else {
    echo "Notifikasi gagal dikirim ke Telegram.";
}

mysqli_close($conn);
?>
