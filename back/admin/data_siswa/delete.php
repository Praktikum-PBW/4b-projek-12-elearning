<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");

    if ($query) {
        echo "<script>alert('Berhasil menghapus data');</script>";
        echo "<script>window.location.href = 'index.php?page=siswa';</script>";
    } else {
        echo "Gagal";
    }
}
