<div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Materi</h4>
                <a href="index.php?page=materi_create" class="btn btn-success"><i class="fa-solid fa-plus"></i>Tambah</a>
        </div><hr>
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>ID Materi</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Video</th>
                <th>Deskripsi</th>
                <th>Kelas</th>
                <th>Aksi</th>        
            </tr>
        </thead>        
        <tbody>
                    <?php
                    $mapel=$_SESSION['nama'];
                    $query = mysqli_query($koneksi, "SELECT * FROM materi JOIN tb_guru ON materi.nip = tb_guru.nip
                    JOIN kelas ON materi.kelas_id = kelas.id_kelas  
                    LEFT JOIN mapel ON tb_guru.mapel_id = mapel.id_mapel WHERE tb_guru.mapel_id='$mapel'");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <span class="bg-success text-white px-4">
                                        <?= $data['id_materi'] ?>
                                    </span>
                                </td>
                                <td><?= $data['nip'] ?></td>
                                <td><?= $data['nama_guru'] ?></td>
                                <td><?= $data['nama_pelajaran'] ?></td>
                                <td>                               
                                    <a href="materi/video/<?= $data['video'] ?>">
                                        <video src="materi/video/<?= $data['video'] ?>" controls width='320px' height='200px'></video>
                                    </a>
                                </td>
                                <td><?= $data['deskripsi']?></td>
                                <td><?= $data['nama_kelas']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=materi_edit&materi=<?= $data['id_materi'] ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        <a href="index.php?page=materi_delete&materi=<?= $data['id_materi'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa-solid fa-trash-can"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="9">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
        </table>
    </div>