<div class="col-md-10 offset-1">
     <h3 class="text-bold">
          <i class="fa-solid fa-gauge"></i>     
          Dashboard
     </h3><hr>
     <div class="alert alert-success">
          Hallo, selamat datang <?= $_SESSION['nama'] ?>
     </div>
     
     <div class="row justify-content-between">
               <div class="col-md-4 mb-3">
               <div class="card bg-info" style="width: 18rem;">
                    <div class="card-body text-white">
                         <h5 class="card-title">JUMLAH GURU</h5>
                         <div class="display-4">
                              <?php 
                                   include '../../config/koneksi.php';
                                   $query=mysqli_query($koneksi,"SELECT * FROM tb_guru");
                                   $hasil=mysqli_num_rows($query);
                                   echo "$hasil";
                              ?>
                              </div>
                         <a href="index.php?page=guru" class="text-white text-decoration-none">Lihat detail <i class="fa-solid fa-angles-right"></i></a>
                    </div>
               </div>
               </div>
               <div class="col-md-4 mb-3">
               <div class="card bg-warning" style="width: 18rem;">
                    <div class="card-body text-white">
                         <h5 class="card-title">JUMLAH SISWA</h5>
                         <div class="display-4">
                              <?php 
                                   include '../../config/koneksi.php';
                                   $query=mysqli_query($koneksi,"SELECT * FROM siswa");
                                   $hasil=mysqli_num_rows($query);
                                   echo "$hasil";
                              ?>
                         </div>
                         <a href="index.php?page=siswa" class="text-white text-decoration-none">Lihat detail <i class="fa-solid fa-angles-right"></i></a>
                    </div>
               </div>
               </div>
               <div class="col-md-4 mb-3">
               <div class="card bg-danger" style="width: 18rem;">
                    <div class="card-body text-white">
                         <h5 class="card-title">JUMLAH MAPEL</h5>
                         <div class="display-4">
                              <?php 
                                   include '../../config/koneksi.php';
                                   $query=mysqli_query($koneksi,"SELECT * FROM mapel");
                                   $hasil=mysqli_num_rows($query);
                                   echo "$hasil";
                              ?>
                              </div>
                         <a href="index.php?page=mapel" class="text-white text-decoration-none">Lihat detail <i class="fa-solid fa-angles-right"></i></a>
                    </div>
               </div>
               </div>
          </div>
          <div class="row">
          <div class="col-md-4 mb-3">
               <div class="card bg-success" style="width: 18rem;">
                    <div class="card-body text-white">
                         <h5 class="card-title">JUMLAH KELAS</h5>
                         <div class="display-4">
                              <?php 
                                   include '../../config/koneksi.php';
                                   $query=mysqli_query($koneksi,"SELECT * FROM kelas");
                                   $hasil=mysqli_num_rows($query);
                                   echo "$hasil";
                              ?>
                              </div>
                         <a href="index.php?page=kelas" class="text-white text-decoration-none">Lihat detail <i class="fa-solid fa-angles-right"></i></a>
                    </div>
               </div>
               </div>
          </div>
</div>
<div class="mt-4 border-top">
     <p class="text-center">Copyright Guruku &copy2022</p>
</div>
