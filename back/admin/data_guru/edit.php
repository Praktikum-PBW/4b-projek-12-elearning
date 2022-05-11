<?php
if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nip='$nip'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
            <div class="col-md-10 offset-1">
                <div class="d-flex justify-content-between">
                    <h3>Edit data guru</h4>
                </div>
                <form action="index.php?page=guru_update" method="post">
                    <input type="hidden" name="nip" value="<?= $nip ?>">                   
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama Guru</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_guru'] ?>" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email Guru</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="alamat" class="form-label">Alamat Guru</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>">
                    </div>
                    <button type="submit" name="edit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                    <a href="index.php?page=guru" class="btn btn-primary">Kembali</a>
                </form>
            </div>
<?php
    } else {
        header("Location: index.php?page=guru");
    }
} else {
    header("Location: index.php?page=guru");
}
