<?php
include '../../config/koneksi.php';

session_start();
session_destroy();
$_SESSION['error'] = "Anda telah logout";
header("Location: ../../index.php");