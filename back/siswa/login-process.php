<?php
include '../../config/koneksi.php';
    if(isset($_POST['login'])){
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);

    // Query untuk mengakses isi table
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama='$username' OR email='$username'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0 ) {
        if($password == $data['password']){
            $_SESSION['id'] = $data['id'];
            $_SESSION['kelas_id'] = $data['kelas_id'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['tingkat'] = $data['tingkat'];
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