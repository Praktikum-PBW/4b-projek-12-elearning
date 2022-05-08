<?php
if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_guru WHERE nip='$nip'");

    if ($query) {
        echo "<script>alert('Berhasil menghapus data');</script>";
        echo "<script>window.location.href = 'index.php?page=guru';</script>";
    } else {
        echo "Gagal";
    }
}
