<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama']))));
        
    $query = mysqli_query($koneksi, "UPDATE mapel SET nama_pelajaran='$nama' WHERE id_mapel='$id'");

    if ($query) {
        header("Location: index.php?page=mapel");
    } else {
        echo "Gagal";
    }
}
