<h2 class="border-bottom pb-2" >Bahasa Inggris</h2>
        <div class="row justify-content-center mb-3 mt-3">
            <?php
            include '../../config/koneksi.php';
                $query=mysqli_query($koneksi,"SELECT * FROM materi JOIN kelas ON materi.kelas_id = kelas.id_kelas WHERE nama_mapel='Bahasa Inggris'");
                if (mysqli_num_rows($query) > 0) {
                    foreach($query as $data){
            ?>
               <div class="col-md-4 mb-3">
                <div class="card bg-light shadow-sm">
                    <video src="../guru/materi/video/<?= $data['video'] ?>" controls class="card-img-top"></video>
                        <div class="card-body">
                            <a href="index.php?page=<?= $data['nama_mapel']?>" class="btn btn-warning mb-2"><?= $data['nama_mapel']?></a>
                            <p class="card-text"><?= $data['deskripsi']?></p>
                            <p class="card-text text-end"><small class="text-muted"><a href="index.php?page=kelas_<?= $data['nama_kelas']?>" class="btn btn-success"><?= $data['nama_kelas']?></a></small></p>
                        </div>
                    </div> 
               </div>
            <?php
            }            
         } else{
            ?>
                <div class="alert alert-danger">Tidak ada materi</div>
            <?php    
            }
            ?>
        </div>