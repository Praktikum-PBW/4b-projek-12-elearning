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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/vendor/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
    <div class="upper" data-aos="fade-up">
        <button id="scrollUp" class="border-0 bg-transparent"><i class="bi bi-arrow-up-square-fill fs-1 text-danger"></i></button>
    </div>
    
    <!-- Awal home -->
    <section id="home">
    <!-- Awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-warning fw-bold fs-3" href="#"><img src="https://img.icons8.com/color/100/100000/literature--v1.png" width=55/> Guruku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang</a>
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
                            <a class="dropdown-item text-white" href="back/guru/login.php"><i class="fa-solid fa-user-tie"></i>  Guru</a>
                        </li> 
                        <li>
                            <a class="dropdown-item text-white" href="back/siswa/login.php"><i class="fa-solid fa-user-graduate"></i>  Siswa</a>
                        </li>
                    </ul>
                    </div>           
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->
        <div class="container">
            <div class="row justify-content-center pt-5" data-aos="fade-up">
                <div class="col-12 col-lg-6 mb-5">
                    <div class="row">
                    <h4 class="bg-warning text-white rounded-pill p-1 col-auto">Ayo belajar!</h4>
                    </div>
                    <h3 class="display-5 fw-bold">Belajar Mudah Dimana Saja & Kapan Saja dengan <span class="logo fw-bold">Guruku</span></h3>
                    <p class="mt-3 abu">Guruku menawarkan pembelajaran yang terstruktur dan efektif. Nikmati kemudahan belajar dan materi terlengkap disini!</p>
                    <div class="garis mb-3"></div>
                    <button class="btn bt btn-lg mt-4"><a href="back/siswa/registrasi.php" class="text-decoration-none">Daftar Sekarang</a></button>
                </div>
                <div class="col-10 col-lg-6">
                    <img src="assets/img/undraw_happy_news_re_tsbd.svg" alt="Guru" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir home -->
    
    <!-- Awal service -->
    <section id="service">
        <div class="container">
            <div class="row text-center mb-3" data-aos="zoom-in">
                <h4 class="p-2">Unggulan Kami</h4>
                <h2 class="text-bold display-5">Mengapa Harus Belajar di Guruku</h2>
                <div class="garis mx-auto"></div>
            </div>
            <div class="row justify-content-center pt-5 pb-2">
                <div class="col-5 col-lg-3 mb-4 text-center"data-aos="zoom-in">
                <div class="card pt-3 border-0" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAABmJLR0QA/wD/AP+gvaeTAAAEIklEQVR4nO2cTWgdVRTH/+e+l/Z92EBfW21MreBCKUrBVSkm8NoEgtiV0Gx0I4IB80EXChYtuLAVNyIxiUZQuxBRshAUu2kSUmN36sIipTuFBloQa0gzeU3em+PiNc20UN+dOff2ZV7Ob3cv9557+HFn5s4wHEBRlBRDksntH/aVattrx5j5CIBOgEqO8mo6jPD0ytDsd43GZZME3/35czuCldxbVVRPgFGILtsqEMwem3GxBeYmep8IVvh7AE/HzqoFiSWwOF7eyyFfALAv0r3I4B8N8DvD3HCb3oOG3wawP84Me4EM4vHMFO6WN9lmbp1cfP3nlIurUxjrfQ1gPwLz473HAe6608H8TjA8ezrOYq2IsR1I4BOR5vlgaPaMh3xSh5XAwmRfB4BD6+0Q/B6ohR65AqwE0lr1mcjYxcrDuy76Syld2F3CRB2R1lX0T9X8pJM+rAQyI7fRooqvZNJIojcRG4oTPQe5Ri+CuKPxaM8wqjD4I8gWzmLgh8BlaC8C82O9/RzyVyBu8xE/NgSAgfxaMLJtouuwy3Or9THGmnfLWQI+BbA55EUg4KnVcPtJlzGd78CHSpknQ/DOSNdnrteICxEOMKMbAAg47DK2c4FhNswj3NjYwdDMgOs14nL7Fa273qK8y9juL+EthgoUogKFqEAhKlCI86cwMS9EP9MUxno2wVebu1JYcBnZ+Q5cHpy7RsBPruO6ghjfuozn5RIOw9pLxHzBR2wBtwA6tTw8/bXLoF7ehVdG5q4CKBfHy3uZqNPHGnGgKqrLO/gKXplz/iXJ29cYoH45A7jmc41mo09hISpQiAoUogKFqEAhKlCIChSiAoWoQCEqUIgKFKIChahAISpQiAoUogKFqEAhKlCIChSiAoWoQCEqUIgKFKIChahAISpQiAoUogKFqEAhKlCI6Pe2wmRfB6q1Ywi5iwmPEajdVWLNgQ/EnZFIYPGjnkc4izNYq74MYBtovYLPJvgd+gGTQCA/zlm+BJBVYZpWJ8kO3H1PxagFMJ8jQ1eYaclRXk3HEOZtxiW+BzKwRKA3grYbX2Lg17WkcdJOIoEMLBGbo8Hw+V9cJ5Q2kh1jGKdUXp0kAivFQuUL55mkFMuyJxvnEwb/+ferF1vmYSHFruwJ+E6RBgLl/m/sVsOuchHwV6S5Pz9a3nffwVsMK4HBntJvAK6vzzEm86a/lNKF3T2wf6rGoLPrTQYG8x8fPe4tqxRhXYS2NPp8e8WsXgbw6O2uGsDvBxR+gMG5m37S2/zEquKbHztyiGBmABQj3f8w4ZwJcYmJ/nWbXvMwhPmbg9OXG42LXQY5N9rTbQy+wcZObFFoIBiablg0KPZBujIyM28ymWcB/gTAaqLcWghRIe56Vd/MCyB0g9AJpp2NZ6UD20LciqKkmv8A9esOT4NQJNAAAAAASUVORK5CYII=" class="img-fluid" width=70>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Materi Lengkap</h5>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-5 col-lg-3 mb-4 text-center"data-aos="zoom-in" data-aos-delay="500">
                <div class="card pt-3 border-0" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                        <img src="data:image/png;base64,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" class="img-fluid" width=70>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Aman & Terpercaya</h5>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-5 col-lg-3 mb-4 text-center"data-aos="zoom-in"data-aos-delay="1000">
                <div class="card pt-3 border-0" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAE5klEQVR4nO2dT2gcVRzHP292k5i0EeqpaVP1ZkuKUpMYQ29ie2lBxKu5hWBQRLAkNaXbIVpLlIpiCzGtCMazIFWEFrUgkgazFbFNr2L/pD3apKkm2XkeJpqdjXF3JTPvt5PfB3KY385mvvDJ2/fm5e08UBRlbcyqytHONjzbi2Uf8CiwKfFUyXIP+BU4j5c5iz857TLMihC/rR7beBJLP5BxF8kpBYw5zUxwiLH8oosAoRC/rZ5C41cYnnURQiAXuG0PuJDiAWAbT6qMCPvYyrsuLmw42tmGsT8T+Ziy03jmDeYbvuOdH2ZdBEuMgb3NPPDnM8AJYFfRK0sEweO8dflaknGyyx14iYxsN/7k3SSDOCP8g/uCwfaLNJhLwM7lV7JkvF7g9STjeFi7P1oyQxtGRjEj+d/BG4rULPvXODs2PDA7IpU/Gr5NOoQYPPNNSeWRpCNkgeZIpbTPyHW8AIwBDyWWKhluAH0MT339T8WfvEuuo/ic5tI3xY1XwTmnSJ8MgFbgI9chSqlEyNbYU7hjR/lTkqUSIUqCZKt+x/DU6vmvWiLXYV1H+C+0hQhDhQhDhQhDhQhDhQhDhQhDhQhDhQhDhQhDhQhDhQhDhQhDhQij+tneWqfcbLXj2WxtIcJIbwsJV2P2YXgR2I28Ncr3wPwC9jO8+2fwry5AWluIv2cbQeMlDB8CXciTAbAJ7NPAKYLGCYbaWyCNQvy2eoLMl8Ae11Gq4Emy3jn62uvSJ6TQ2EdtyVjGtrOV3vT1IWGfUcw5vMJL+D/dcpJnLY50b8dbGMWYgytF05O+FgJtkaNCXb84GQDHJ26SyfaXVHenUcjmyNHxiZuOcpTHn7xRUmlOo5CaJn19SDncrVVevZb4X9iILcTVWuWK1hJvRCEu1yqXXUu8EYWIZuP1IaXEPbtb5VpibSHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCUCHCqP4bVFJ3F6j1XRuW0RYijEqElD5tQImRSoT0AdfjDqKElO9DwicPPBx/FAW0DxGHjO+ph1uHv4mlB7BgxvHmc38/hzBWhI0aZQgJmobBDqwU7CBBE8BhV5FcIeQjy/ZUVlsXXI4ayw6OhAhJFFejxut4pq/cSVlgluI9Xwf2Nie/h7oZBzsYLZlPY7mU8FGjB/wWqYSbvSecYj4HZgS4Ff6YEcz8scRzCCALnCf64MgTDLZfDPcXT4hwNHUYqZ14gqNADy9zFigU1XbRYC6Re+p5/K4H1/uCNUnQNIxlAGgBti2PAofjuFQWf3KaY52nsfbVovpOCD4ngJL9xeUS62zvmqPAdW/R4ShrJjgEXFjvX65UTyhkLL/IbXsA7AfAkttIEjHjq0vxjAJX7kPG8osM51/DyzyB4T3gCjAXx0VrjgRHgan4L1uEXMddiu+rCnWtYp9u7Xe1EhSKb1Jn03inPh058hZGOdK93VGWtQlljJZUr6SxhbxM+LDk2sPa/vS1EO/+GeCy6xj/gx+5w8fpE+JfXWDJHgSTdx2lCqZYss8xll/MuE4SC9/PzPFYyydsZgbMFmALUO86VglzwBTWvs0dXuH9cKrqL/9pMkAkL68zAAAAAElFTkSuQmCC" class="img-fluid" width=70>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Support Semua Device</h5>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-5 col-lg-3 mb-4 text-center"data-aos="zoom-in" data-aos-delay="1500">
                <div class="card pt-3 border-0" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAAESElEQVR4nO3dTWgcZRzH8e8zaxPbgC/1koMvCBWKDRGSnSotXiTHepLmJvQgEZE2VdtqwZ1MdrXQINK0BbEeCtqT9aboJXiKYJ3dRNT42lKs4stBVErbWJt5PGzV7WZD6KYz+w/8PpBDmCfzPJvvzuyTXAZERETa4zKfISo+BhwD1mc+V7Z+BEYoVz/IcpIgy5NfdZTVHwPgTuD1rCfJI0hvDnPk5a6sJ8gjiFyHm3KfsVzN/nPrRoqKPs/pdIUYoyDGKIgxCmKMghijIMYoiDEKYoyCGKMgxiiIMQpijIIYoyDGKIgxCmKMghijIMYoiDEKYoyCGKMgxiiIMQpijIIYoyDGKIgxCmKMghijIMYoiDEKYoyCGKMgxiiIMQpijIIYoyDGKIgxCmKMghijIMYoiDEKYoyCGKMgxiiIMQpijIIYoyDGKIgxCmKMghijIMYoiDEKYoyCGKMgxiiIMQpijIIYoyDGKIgxCmKMghijIMYoiDEKYoyCGJP/U9pupHhTF+naUWAn4IGjBJcmiecud3hlbVu9V0gcDpHePAtMUH/g493ABOnaOaLB7Z1dXPtW3xXy4oP34a68Suq3LfEo3w3g3qZUnAK3m0oyl/cSV2L1BNnT38O6rr2w8AK47mXHO4bAzzIWvsZ8GnGw9mcOq1yx1XDLcpTCHazrOg2MAc0xUvBv1L9Im46twftddLuvKYU7yOPp2CtkO0hpYJCoOI3zx2n9kOOEIN1KuTZCuTaCpwhMtxjXi/PHicKEONyS7aJXxuYtKw578X4czxO0ftP8hGc/lepb1HdXdZXqLPAwUfgo+CPAPdf+mB8kZZoofIcFnuPl5IfsXkR7bF0hI4NriMJRUv8NnhEWr+9vnDvMfPdGKtU3aYzRqJy8S+DvB8aB+aajDvx2Cv4romLMzg3Lfx7lyE6QOByil0/BHwJuWXTcM0WaPsB4MsrER+eXP1/tIuVqTOr7wJ1sMaIHGOP2276wtE3u/C1r+W3stwQ8Q1x9v63zv1Q7AwwTDzxCGkwCfU0jTG2TO3eF7OnvISrGBAuf49y2FiMuAOP8/kd/2zEaxTMf8osfALcbWLwFdgzh/Cxj4STPD9664vnalP02sPkB8eVqQKn4OI6DtN45eeAEVwp7OXDq10zWtH/zHXT5CO+fBgotRvwGrkKQHCEtLlxzpFzN9HeWfxD4BNjcerD7GM8uKkmS9bIAKIUhjsPgH1pixOK1ZhykE7esVjF+xrsnCZKtucUAqCQJ5WQL+GHgXIsRS7xxstPpXVZ9GxsUNlJJjhEv+ks7D55y7SQXL/+7Tf6rA2v4T+d2WZ4pCoVR4lNfdmwNjV757AIQEw+cIC0cAN+RrXAeQc4C9/7/rf+OwD9LPPNeDnNfv3jmNDBc//e+PwRsajh6Nuvpc7hlpU9Rvz+fA/YRzPeZjdEoTqYILg0A+6iv/furr0VERMSkfwAjCA41U5GewQAAAABJRU5ErkJggg==" class="img-fluid" width=70>
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Mudah digunakan</h5>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Akhir service -->

    <!-- Awal visi -->
    <section id="visi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-6">
                    <img src="assets/img/undraw_in_the_office_re_jtgc.svg" alt="Office" class="img-fluid" width=450 data-aos="fade-up">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-lg-6 text-center">
                    <h2 class="display-5 fw-bold pt-5" data-aos="fade-up">Guruku Dibuat Untuk Meningkatkan Kualitas Pembelajaran Di Indonesia</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Visi -->
    
    <!-- Awal tentang -->
        <section id="tentang">
            <div class="container">
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

    <!-- Awal materi -->
        <section id="materi" class="pb-4">
            <div class="container">
                <div class="row text-center mb-5" data-aos="zoom-in">
                    <h4 class="p-2">Materi</h4>
                    <h2 class="text-bold display-5">Materi Guruku</h2>
                    <div class="garis mx-auto"></div>
                </div>
                <div class="row justify-content-center mb-3" data-aos="fade-up" data-aos-delay="800">
                    <div class="col-md-4 mb-2">
                        <?php
                            include 'config/koneksi.php';
                            $query = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='2'");
                            $data = mysqli_fetch_array($query);
                        ?>
                        <div class="card bg-dark text-white">
                        <video src="back/guru/materi/video/<?= $data['video'] ?>" controls class="card-img"></video>
                            <div class="card-img-overlay">
                                <h5 class="card-title">Matematika</h5>
                                <a href="back/siswa/login.php" class="btn btn-warning">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <?php
                            include 'config/koneksi.php';
                            $query = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='16'");
                            $data = mysqli_fetch_array($query);
                        ?>
                        <div class="card bg-dark text-white">
                        <video src="back/guru/materi/video/<?= $data['video'] ?>" controls class="card-img"></video>
                            <div class="card-img-overlay">
                                <h5 class="card-title">Fisika</h5>
                                <a href="back/siswa/login.php" class="btn btn-warning">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <?php
                            include 'config/koneksi.php';
                            $query = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='15'");
                            $data = mysqli_fetch_array($query);
                        ?>
                        <div class="card bg-dark text-white">
                        <video src="back/guru/materi/video/<?= $data['video'] ?>" controls class="card-img"></video>
                            <div class="card-img-overlay">
                                <h5 class="card-title">Biologi</h5>
                                <a href="back/siswa/login.php" class="btn btn-warning">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <?php
                            include 'config/koneksi.php';
                            $query = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='13'");
                            $data = mysqli_fetch_array($query);
                        ?>
                        <div class="card bg-dark text-white">
                        <video src="back/guru/materi/video/<?= $data['video'] ?>" controls class="card-img"></video>
                            <div class="card-img-overlay">
                                <h5 class="card-title">Kimia</h5>
                                <a href="back/siswa/login.php" class="btn btn-warning">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                            include 'config/koneksi.php';
                            $query = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='17'");
                            $data = mysqli_fetch_array($query);
                        ?>
                        <div class="card bg-dark text-white">
                        <video src="back/guru/materi/video/<?= $data['video'] ?>" controls class="card-img"></video>
                            <div class="card-img-overlay">
                                <h5 class="card-title">Fisika</h5>
                                <a href="back/siswa/login.php" class="btn btn-warning">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir materi -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function () {
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