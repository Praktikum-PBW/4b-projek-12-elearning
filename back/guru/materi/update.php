<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $deskripsi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['des$deskripsi']))));
    $video = $_POST['video'];
    $kelas = $_POST['kelas'];
        
    $query = mysqli_query($koneksi, "UPDATE materi SET deskripsi='$deskripsi',video='$video',kelas_id='$kelas',kelas='$kelas' WHERE id_materi='$id'");

    if ($query) {
        header("Location: index.php?page=materi");
    } else {
        echo "Gagal";
    }
}

