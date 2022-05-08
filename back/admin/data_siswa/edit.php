<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
            <div class="col-md-10 offset-1">
                <div class="d-flex justify-content-between">
                    <h4>Edit Siswa</h4>
                </div>
                <form action="index.php?page=siswa_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <?php
                        $kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
                        foreach ($kelas as $data) {
                        ?>
                            <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>
                    <button type="submit" name="edit" class="btn btn-warning mb-4"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                    <a href="index.php?page=siswa" class="btn btn-primary mb-4">Kembali</a>
                </form>
            </div>
<?php
    } else {
        header("Location: index.php?page=kategori");
    }
} else {
    header("Location: index.php?page=kategori");
}
