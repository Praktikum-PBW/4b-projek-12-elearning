<div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4>Tambah Materi</h4>
        </div>
        <form action="index.php?page=materi_store" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            </div>
                <?php 
                    $id_materi=mysqli_query($koneksi,"SELECT * FROM materi");
                    $data=mysqli_fetch_array($id_materi);
                ?>
                <input type="text" name="id_materi" id="id_materi" class="form-control" hidden value="<?= $data['id_materi']?>">
                <?php
                    $mapel=$_SESSION['nama'];
                    $query=mysqli_query($koneksi,"SELECT * FROM tb_guru JOIN mapel ON tb_guru.mapel_id = mapel.id_mapel WHERE tb_guru.mapel_id='$mapel'");
                    $data=mysqli_fetch_array($query);
                ?>
                <input type="text" name="mapel" id="mapel" class="form-control" hidden value="<?= $data['nama_pelajaran']?>">
            <div class="mb-3">
                <label for="video" class="form-label">Video</label>
                <input type="file" name="video" id="video" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" required name="deskripsi" id="deskripsi"></textarea>
            </div>
            <div class="mb-3">
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
            <a href="index.php?page=materi" class="btn btn-primary mb-4">Kembali</a>
        </form>
    </div>