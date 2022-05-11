<?php
include '../../config/koneksi.php';
    if(isset($_POST['login'])){
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    // Query untuk mengakses isi table
    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nama_guru='$username' OR email='$username'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0 ) {
        if($password == $data['password']){
            $_SESSION['nip'] = $data['nip'];
            $_SESSION['id'] = $data['mapel_id'];
            $_SESSION['guru'] = $data['nama_guru'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['nama'] = $data['nama_mapel'];
            $_SESSION['alamat'] = $data['alamat'];
            header("Location: index.php");   
        }
        else{
            $_SESSION['error'] = "Username atau password salah";
            header("Location: login.php");
        }
    } else {
        $_SESSION['error'] = "User belum terdaftar";
        header("Location: login.php");
    }
    
    
}