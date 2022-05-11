<?php
if (isset($_SESSION['nip']) == "") {
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
        case 'materi':
            include 'materi/index.php';
            break;
        case 'materi_create':
            include 'materi/create.php';
            break;
        case 'materi_store':
            include 'materi/store.php';
            break;
        case 'materi_edit':
            include 'materi/edit.php';
            break;
        case 'materi_update':
            include 'materi/update.php';
            break;
        case 'materi_delete':
            include 'materi/delete.php';
            break;


        default:
            echo "<h1>Maaf halaman tidak ditemukan</h1>";
            break;
    }
} else {
    include 'dashboard.php';
}