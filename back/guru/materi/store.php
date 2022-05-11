<?php
if (isset($_POST['tambah'])) {

    $nama_guru = $_SESSION['guru'];
    $mapel = $_POST['mapel'];
    $deskripsi = $_POST['deskripsi'];
    $kelas = $_POST['kelas'];
    $nip=$_SESSION['nip'];

    //Menambahkan video
    $ekstensi_diperbolehkan = array("mp4","avi","3gp","mov","mpeg");
    $video = $_FILES['video']['name'];
    $x = explode('.', $video);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['video']['size'];
    $file_tmp = $_FILES['video']['tmp_name'];
    $upload_dir = 'materi/video/';
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 20088140) {
            move_uploaded_file($file_tmp, $upload_dir.$video);
            $query = mysqli_query($koneksi, "INSERT INTO materi VALUES(null,'$nip',$kelas,'$nama_guru','$mapel','$video','$deskripsi','$kelas')");
            if ($query) {
                echo "<script>alert('Berhasil menambahkan data');</script>";
                echo "<script>window.location.href = 'index.php?page=materi';</script>";
            } else {
                echo "<script>alert('Gagal');</script>";
            }
        } else {
            echo "<script>alert('Ukuran file terlalu besar');</script>";
        }
    } else {
        echo "<script>alert('Ekstensi tidak diperbolehkan');</script>";
    }
}

