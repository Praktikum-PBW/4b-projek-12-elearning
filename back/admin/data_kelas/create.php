
    <div class="col-md-10 offset-1">
        <div class="d-flex justify-content-between">
            <h4>Tambah Data Kelas</h4>
        </div>
        <form action="index.php?page=kelas_store" method="post">
            <div class="mb-2">
                <label for="nama" class="form-label">Nama Kelas</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <button type="submit" name="tambah" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</button>
            <a href="index.php?page=kelas" class="btn btn-primary">Kembali</a>
        </form>
    </div>