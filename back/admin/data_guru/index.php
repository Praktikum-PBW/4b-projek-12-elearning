 <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">    
            <h4><i class="fa-solid fa-chalkboard-user"></i> Data Guru</h4>
            <a href="index.php?page=guru_create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</a>
        </div><hr>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Mata Pelajaran</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Aksi</th>        
            </tr>
        </thead>        
        <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru JOIN mapel ON tb_guru.mapel_id = mapel.id_mapel");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <span class="bg-success text-white px-4">
                                        <?= $data['nip'] ?>
                                    </span>
                                </td>
                                <td><?= $data['nama_guru'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['nama_pelajaran'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td>
                                    <a href="data_guru/image/<?= $data['foto'] ?>">
                                        <img src="data_guru/image/<?= $data['foto'] ?>" class="img-fluid" width="40" height="40" alt="foto">
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=guru_edit&nip=<?= $data['nip'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        <a href="index.php?page=guru_delete&nip=<?= $data['nip'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa-solid fa-trash-can"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="8">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
        </table>
    </div>