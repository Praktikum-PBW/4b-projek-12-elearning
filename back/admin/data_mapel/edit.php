<?php
if (isset($_GET['id_mapel'])) {
    $id = $_GET['id_mapel'];

    $query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
            <div class="col-md-10 offset-1">
                <div class="d-flex justify-content-between">
                    <h4>Edit Mata Pelajaran</h4>
                </div>
                <form action="index.php?page=mapel_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama mata pelajaran</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_pelajaran'] ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                    <a href="index.php?page=mapel" class="btn btn-primary">Kembali</a>
                </form>
            </div>
<?php
    } else {
        header("Location: index.php?page=mapel");
    }
} else {
    header("Location: index.php?page=mapel");
}
