<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO mapel VALUES(null, '$nama')");

    if ($query) {
        echo "<script>alert('Berhasil menambahkan data');</script>";
        echo "<script>window.location.href = 'index.php?page=mapel';</script>";
    } else {
        echo "Gagal";
    }
}
