<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $password=sha1($password);

    //Menambahkan foto
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $foto = $_FILES['foto']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $upload_dir = 'data_guru/image/';
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {
            move_uploaded_file($file_tmp, $upload_dir.$foto);
            $query = mysqli_query($koneksi, "INSERT INTO tb_guru VALUES(null,'$mapel','$nama','$password','$email','$mapel','$alamat','$foto')");
            if ($query) {
                echo "<script>alert('Berhasil menambahkan data');</script>";
                echo "<script>window.location.href = 'index.php?page=guru';</script>";
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi tidak diperbolehkan";
    }
}

