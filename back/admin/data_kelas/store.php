<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas VALUES(null, '$nama')");

    if ($query) {
        echo "<script>alert('Berhasil menambahkan data');</script>";
        echo "<script>window.location.href = 'index.php?page=kelas';</script>";
    } else {
        echo "Gagal";
    }
}
