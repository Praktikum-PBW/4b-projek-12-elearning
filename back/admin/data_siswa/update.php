<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];

    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama',email='$email',username='$username',tingkat ='$kelas' WHERE id='$id'");
    } else {
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama',email='$email',username='$username',password='$password',tingkat ='$kelas' WHERE id='$id'");
    }

    if ($query) {
        header("Location: index.php?page=siswa");
    } else {
        echo "Gagal";
    }
}
