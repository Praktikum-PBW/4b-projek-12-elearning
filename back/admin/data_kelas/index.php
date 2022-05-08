<div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4><i class="fa-solid fa-paperclip"></i> Data Kelas</h4>
            <a href="index.php?page=kelas_create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</a>
        </div><hr>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kelas");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_kelas'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=kelas_edit&id_kelas=<?= $data['id_kelas'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        <a href="index.php?page=kelas_delete&id_kelas=<?= $data['id_kelas'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa-solid fa-trash-can"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="3">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>