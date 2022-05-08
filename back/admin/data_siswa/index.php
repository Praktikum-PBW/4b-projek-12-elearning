
    <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4><i class="fa-solid fa-graduation-cap"></i> Data Siswa</h4>
            <a href="index.php?page=siswa_create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</a>
        </div><hr>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM siswa JOIN kelas ON siswa.kelas_id=kelas.id_kelas");
                $no = 1;
                if (mysqli_num_rows($query) > 0) {
                foreach ($query as $data) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['nama_kelas'] ?></td>
                    <td>
                <div class="btn-group">
                    <a href="index.php?page=siswa_edit&id=<?= $data['id'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="index.php?page=siswa_delete&id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa-solid fa-trash-can"></i> Delete</a>
                </div>
                    </td>
                </tr>
            <?php
                }
                } else {
                 ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-danger">Tidak ada data</div>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </tbody>
        </table>
    </div>