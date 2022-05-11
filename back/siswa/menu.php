<?php
if (isset($_SESSION['id']) == "") {
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: login.php");
}
if (isset($_GET['page'])) {

    include '../../config/koneksi.php';

    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include 'dashboard.php';
            break;

        // Menu pilihan data guru
        case 'Matematika':
            include 'mapel/matematika.php';
            break;
        case 'Fisika':
            include 'mapel/fisika.php';
            break;
        case 'Kimia':
            include 'mapel/kimia.php';
            break;
        case 'Biologi':
            include 'mapel/biologi.php';
            break;
        case 'Bahasa Indonesia':
            include 'mapel/indonesia.php';
            break;
        case 'Bahasa Inggris':
            include 'mapel/inggris.php';
            break;
        case 'PPKN':
            include 'mapel/ppkn.php';
            break;

        case 'kelas_10':
            include 'mapel/kelas10.php';
            break;
        case 'kelas_11':
            include 'mapel/kelas11.php';
            break;
        case 'kelas_12':
            include 'mapel/kelas12.php';
            break;


        default:
            echo "<div class='alert alert-danger'><h1>Maaf halaman tidak ditemukan</h1></div>";
            break;
    }
} else {
    include 'dashboard.php';
}