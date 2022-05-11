<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku | Layanan Pembelajaran Online</title>
    <link rel="icon" href="assets/img/graduation.png">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <!-- Awal tentang -->
    <section id="about">
        <!-- Awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bgc fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand text-warning fw-bold fs-3" href="#"><img src="https://img.icons8.com/color/100/100000/literature--v1.png" width=55/> Guruku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>          
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="dropdown">
                    <button type="button" class="btn mx-auto text-white bt dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-lock-fill"></i> Masuk
                    </button>
                    <ul class="dropdown-menu bg-transparent border-white mt-3" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item text-white " href="back/guru/login.php"><i class="fa-solid fa-user-tie"></i>  Guru</a>
                        </li> 
                        <li>
                            <a class="dropdown-item text-white " href="back/siswa/login.php"><i class="fa-solid fa-user-graduate"></i>  Siswa</a>
                        </li>
                    </ul>
                    </div>           
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->
            <div class="container" style="padding-top:5rem">
                <div class="row text-center mb-5" data-aos="zoom-in">
                    <h4 class="p-2">Tentang Kami</h4>
                    <h2 class="text-bold display-5">Tentang Guruku</h2>
                    <div class="garis mx-auto"></div>
                </div>
                <div class="row mb-3" data-aos="fade-up">
                    <img src="assets/img/undraw_dream_world_re_x2yl (1).svg" alt="Dream World" class="img-fluid">
                </div>
                <div class="row text-white">
                    <p class="lead" data-aos="fade-up">Seperti yang Anda tahu, Guruku merupakan platform belajar online yang menyediakan layanan bimbel (bimbingan belajar) terbaik dan terbesar di Indonesia,
                        dimana akan membantu siswa dalam menyelesaikan permasalahan belajar.
                        Dengan aplikasi bimbingan belajar online Guruku, 
                        kamu akan dimudahkan dalam memahami beragam materi pelajaran serta dapat diakses kapan pun dan di mana pun. 
                        Sampai dengan saat ini 75% total pelajar di Indonesia telah mempercayakan Guruku sebagai solusi belajar terbaik. 
                    </p>
                    <p class="lead" data-aos="fade-up">
                        Fokus dalam meningkatkan kualitas pendidikan Indonesia secara holistik, 
                        aplikasi bimbingan belajar online ini juga memiliki visi besar dalam menyediakan layanan pendidikan
                        dan materi pembelajaran dari guru-guru terbaik di Indonesia, yang accessible oleh seluruh siswa 
                        di mana saja mereka berada.
                    </p>
                    <p class="lead" data-aos="fade-up">
                    Pendidikan yang merata menjadi visi besar Guruku dalam memberikan akses belajar
                     yang mudah bagi seluruh pelajar di Indonesia. 
                     Memanfaatkan peran besar teknologi, Guruku menciptakan produk-produk belajarnya 
                     secara lebih interaktif untuk membantu siswa dalam memahami beragam materi pelajaran.
                    </p>
                </div>
            </div>
        </section>
    <!-- Akhir tentang -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>$(document).ready(function () {
        $(".navbar-nav").on("click", "a", function () {
          $(".navbar-nav a.active").removeClass("active");
          $(this).addClass("active");
        });
      });
      </script>
      <script>
        var scrollToTopBtn = document.getElementById("scrollUp");
        var rootElement = document.documentElement;

        function scrollToTop() {
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);
      </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>