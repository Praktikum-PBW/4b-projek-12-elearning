<?php
if (isset($_GET['materi'])) {
    $materi = $_GET['materi'];

    $query = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi='$materi'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Edit Materi</h4>
                </div>
                <form action="index.php?page=materi_update" method="post">
                    <input type="hidden" name="id" value="<?= $materi ?>">
                    <div class="mb-2">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $data['deskripsi'] ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="video" class="form-label">Video</label>
                        <input type="file" name="video" id="video" class="form-control" required>
                        <a href="materi/video/<?= $data['video'] ?>">
                            <video src="materi/video/<?= $data['video'] ?>" controls width='320px' height='200px'></video>
                        </a>
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
                <button type="submit" name="edit" class="btn btn-warning mb-4"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                <a href="index.php?page=materi" class="btn btn-primary mb-4">Kembali</a>
                </form>
            </div>
        </div>
<?php
    } else {
        header("Location: index.php?page=kategori");
    }
} else {
    header("Location: index.php?page=kategori");
}
