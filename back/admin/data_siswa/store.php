<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];

    $password = sha1($password);

    $cekUser=mysqli_query($koneksi,"SELECT *FROM siswa WHERE username='$username' OR email='$email'");

        if(mysqli_num_rows($cekUser) > 0){
            echo "<script>alert('Username atau email telah tersedia');</script>";
            echo "<script>window.location.href = 'index.php?page=siswa_create';</script>";
        }
        else{
            $query = mysqli_query($koneksi, "INSERT INTO siswa VALUES(null,'$kelas','$nama','$email','$username','$password','$kelas')");

            if ($query) {
                echo "<script>alert('Berhasil menambahkan data');</script>";
                echo "<script>window.location.href = 'index.php?page=siswa';</script>";
            } else {
                echo "Gagal";
            }
        }
}
