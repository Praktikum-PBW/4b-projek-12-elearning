<?php
if (isset($_GET['id_kelas'])) {
    $id = $_GET['id_kelas'];

    $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id'");

    if ($query) {
        echo "<script>alert('Berhasil menghapus data');</script>";
        echo "<script>window.location.href = 'index.php?page=kelas';</script>";
    } else {
        echo "Gagal";
    }
}
