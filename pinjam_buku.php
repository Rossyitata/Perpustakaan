<?php
include "header.php";
include "koneksi.php";
$qry_detail_buku = mysqli_query($conn, "select * from buku where id_buku = '" . $_GET['id_buku'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-bottom: 20px;
        }
        .card-title {
            font-family: 'Georgia', serif;
            color: #2c3e50;
        }
        .card-text {
            font-family: 'Arial', sans-serif;
            color: #34495e;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-success:hover {
            background-color: #1e8449;
            border-color: #1e8449;
        }
        .btn-back {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-back:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .text-left {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Pinjam Buku</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $dt_buku['foto'] ?>" class="card-img-top">
                </div>
            </div>
            <div class="col-md-8">
                <form action="masukkankeranjang.php?id_buku=<?= $dt_buku['id_buku'] ?>" method="post">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Nama Buku</td>
                                <td><?= $dt_buku['nama_buku'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?= $dt_buku['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Pinjam</td>
                                <td><input type="number" name="jumlah_pinjam" value="1" min="1"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-success" type="submit" value="PINJAM"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
                <div class="text-left">
                    <a href="buku.php" class="btn btn-back">Kembali ke Daftar Buku</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        // Tambahkan interaktivitas jika diperlukan
        document.querySelector('.btn-back').addEventListener('click', function() {
            window.location.href = 'buku.php';
        });
    </script>
</body>
</html>
<?php
include "footer.php";
?>
