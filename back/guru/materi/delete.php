<?php
    include '../../../config/koneksi.php';

    $id_materi = $_GET['materi'];
    $query = mysqli_query($koneksi,"DELETE FROM materi WHERE id_materi='$id_materi'");

    echo "<script>alert('Berhasil menghapus data');</script>";
    echo "<script>window.location.href = 'index.php?page=materi';</script>";