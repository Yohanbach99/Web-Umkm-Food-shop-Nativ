<?php
include "config.php";


if (isset($_GET["items"])) {
    $items = json_decode($_GET["items"]);

  
    if ($items === null && json_last_error() !== JSON_ERROR_NONE) {
        echo "Data pesanan tidak valid.";
    } else {
      
        $namaPemesan = "Nama Pengguna";
        $tanggal = date("Y-m-d"); 

       
        foreach ($items as $item) {
            $namaMakanan = $item->nama;
            $harga = $item->harga;

           
            $sql = "INSERT INTO riwayat_pemesanan (tanggal, nama_pemesan, nama_makanan, harga) VALUES ('$tanggal', '$namaPemesan', '$namaMakanan', $harga)";
            mysqli_query($koneksi, $sql);
        }

        
        echo "Pesanan berhasil diproses.";
    }
} else {
    echo "Data pesanan tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Courgette&family=Gabarito&family=Gloria+Hallelujah&family=Hachi+Maru+Pop&family=Mochiy+Pop+One&family=Mochiy+Pop+P+One&family=Pacifico&family=Permanent+Marker&family=Young+Serif&display=swap" rel="stylesheet">
    <!-- untuk navbar -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

</head>
<body>
    <h1>Riwayat Pemesanan</h1>
    <table border="1">
        <tr>
            <th>Tanggal</th>
            <th>Nama Pemesan</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM riwayat_pemesanan WHERE nama_pemesan = '$namaPemesan'";
        $result = mysqli_query($koneksi, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["tanggal"] . "</td>";
            echo "<td>" . $row["nama_pemesan"] . "</td>";
            echo "<td>" . $row["nama_makanan"] . "</td>";
            echo "<td>" . $row["harga"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id"] . "' >Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
