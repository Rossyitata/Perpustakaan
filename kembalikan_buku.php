<?php
include "koneksi.php";

$id_peminjaman = $_GET['id_peminjaman'];

// Query untuk menghapus data peminjaman berdasarkan id_peminjaman
$query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Buku berhasil dikembalikan');</script>";
    echo "<script>location.href='tampil_pinjaman.php';</script>";
} else {
    echo "<script>alert('Gagal mengembalikan buku');</script>";
    echo "<script>location.href='tampil_pinjaman.php';</script>";
}

mysqli_close($conn);
?>
