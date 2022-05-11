<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE tb_admin SET nama_lengkap='$nama',email='$email',username='$username',alamat ='$alamat' WHERE id_admin='$id'");
    } else {
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE tb_admin SET nama_lengkap='$nama',email='$email',username='$username',alamat ='$alamat' WHERE id_admin='$id'");
    }

    if ($query) {
        echo "<script>alert('Berhasil merubah data akun');</script>";
        echo "<script>window.location.href = 'index.php';</script>";

    } else {
        echo "Gagal";
    }
}
?>
<div class="col-md-10 offset-1">
    <h3 class="text-bold">
        Profile
    </h3><hr>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $_SESSION['id']?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?= $_SESSION['nama']?>" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" name="username" class="form-control" value="<?= $_SESSION['username']?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $_SESSION['email']?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" cols="10" rows="3" class="form-control" required><?= $_SESSION['alamat']?></textarea>
        </div>
        <button type="submit" name="edit" class="btn btn-warning mb-4"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
        <a href="index.php" class="btn btn-primary mb-4">Kembali</a>
    </form>
</div>