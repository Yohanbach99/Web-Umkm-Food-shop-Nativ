<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM pesanan WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header('Location: tabel_user.php');
        exit(); 
    } else {
        echo "Gagal menghapus data pesanan.";
    }

    mysqli_stmt_close($stmt);
}
?>

        echo "Data pesanan berhasil dihapus.";
    } else {
        echo "Gagal menghapus data pesanan.";
    }

    mysqli_stmt_close($stmt);
}


header('Location: tabel_user.php'); 
?>
