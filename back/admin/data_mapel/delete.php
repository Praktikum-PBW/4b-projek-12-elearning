<?php
if (isset($_GET['id_mapel'])) {
    $id = $_GET['id_mapel'];

    $query = mysqli_query($koneksi, "DELETE FROM mapel WHERE id_mapel='$id'");

    if ($query) {
        echo "<script>alert('Berhasil menghapus data');</script>";
        echo "<script>window.location.href = 'index.php?page=mapel';</script>";
    } else {
        echo "Gagal";
    }
}
