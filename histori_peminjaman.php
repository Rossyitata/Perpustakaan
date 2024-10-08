<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg');
            /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .table-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }

        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }

        .btn-warning {
            background-color: #f39c12;
            border-color: #f39c12;
        }

        .btn-warning:hover {
            background-color: #e67e22;
            border-color: #e67e22;
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
        <h2 class="text-center my-4">Histori Peminjaman Buku</h2>
        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal harus Kembali</th>
                        <th>Nama buku</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_histori = mysqli_query($conn, "select * from peminjaman_buku order by id_peminjaman_buku desc");
                    $no = 0;
                    while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                        $no++;
                        //menampilkan buku yang dipinjam
                        $buku_dipinjam = "<ol>";
                        $qry_buku = mysqli_query($conn, "select * from  detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                        while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                            $buku_dipinjam .= "<li>" . $dt_buku['nama_buku'] . "</li>";
                        }
                        $buku_dipinjam .= "</ol>";
                        //menampilkan status sudah kembali atau belum
                        $qry_cek_kembali = mysqli_query($conn, "select * from pengembalian_buku where id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                        if (mysqli_num_rows($qry_cek_kembali) > 0) {
                            $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                            $denda = "denda Rp. " . $dt_kembali['denda'];
                            $status_kembali = "<label class='alert alert-success'>Sudah kembali <br>" . $denda . "</label>";
                            $button_kembali = "";
                        } else {
                            $status_kembali = "<label class='alert alert-danger'>Belum kembali</label>";
                            $button_kembali = "<a href='kembali.php?id=" . $dt_histori['id_peminjaman_buku'] . "' class='btn btn-warning' onclick='return confirm(\"Apakah Anda yakin ingin mengembalikan buku ini?\")'>Kembalikan</a>";
                        }
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $dt_histori['tanggal_peminjaman'] ?></td>
                            <td><?= $dt_histori['tanggal_kembali'] ?></td>
                            <td><?= $buku_dipinjam ?></td>
                            <td><?= $status_kembali ?></td>
                            <td><?= $button_kembali ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-left">
            <a href="home.php" class="btn btn-back">Kembali ke Home</a>
            <a href="buku.php" class="btn btn-back">Kembali ke Daftar Buku</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
include "footer.php";
?>