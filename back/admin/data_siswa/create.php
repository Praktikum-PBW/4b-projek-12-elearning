
    <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4>Tambah Siswa</h4>
        </div>
        <form action="index.php?page=siswa_store" method="post">
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
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
            <button type="submit" name="tambah" class="btn btn-success mb-4"><i class="fa-solid fa-plus"></i>Tambah</button>
            <a href="index.php?page=siswa" class="btn btn-primary mb-4">Kembali</a>
        </form>
    </div>