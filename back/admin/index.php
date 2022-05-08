<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku-Admin</title>
    <link rel="icon" href="../../assets/img/graduation.png">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/DataTables/datatables.css">
</head>

<body>
    <?php
        session_start();
        ob_start();
    ?>
    <!-- Awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#">Admininstrator</a><span class="side-bar "><i class="fas fa-bars"></i></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto pt-2">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-2 mb-2 mb-lg-0">
                <li class="nav-item me-2">
                <a class="nav-link fs-5" aria-current="page" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kotak masuk"><i class="fa-solid fa-envelope"></i></a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link fs-5" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifikasi"><i class="fa-solid fa-bell"></i></a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link fs-5" href="logout.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Keluar"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Awal content -->
    <div class="row main g-0">
        <div class="col-md-2 bg-secondary sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item text-center border-bottom pb-3 pt-3 active">
                    <a class="nav-link text-white" aria-current="page" href="index.php"><i class="fa-solid fa-gauge me-1 fs-5"></i> Dashboard</a>
                </li>
                <li class="nav-item text-center border-bottom pb-3 pt-3">
                    <a class="nav-link text-white" href="index.php?page=guru"><i class="fa-solid fa-chalkboard-user me-1 fs-5"></i> Data Guru</a>
                </li>
                <li class="nav-item text-center border-bottom pb-3 pt-3">
                    <a class="nav-link text-white" href="index.php?page=siswa"><i class="fa-solid fa-graduation-cap me-1 fs-5"></i> Data Siswa</a>
                </li>
                <li class="nav-item text-center border-bottom pb-3 pt-3">
                    <a class="nav-link text-white" href="index.php?page=mapel"><i class="fa-solid fa-book-bookmark me-1 fs-5"></i> Data Mapel</a>
                </li>
                </li>
                <li class="nav-item text-center border-bottom pb-3 pt-3">
                    <a class="nav-link text-white" href="index.php?page=kelas"><i class="fa-solid fa-paperclip me-1 fs-5"></i> Data Kelas</a>
                </li>
            </ul>
            <div class="profile mt-5 pt-3 text-center">
                <a href="index.php?page=profile">
                    <img src="https://img.icons8.com/color/70/000000/circled-user-male-skin-type-1-2--v1.png" class="rounded-circle d-block mx-auto border" alt="Foto"/>
                    <p class="text-white text-center"><?= $_SESSION['nama'] ?></p>
                </a>
                <button class="btn btn-warning"><a href="logout.php" class="text-white text-decoration-none">Logout</a></button>
            </div>
        </div>
        <div class="col-md-10 bg-white pt-5">
            <?php
                include "menu.php";
            ?>
        </div>
    </div>
    <!-- Akhir content -->

<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".nav .flex-column").on("click", "li", function () {
            $(".nav .flex-column li.active").removeClass("active");
            $(this).addClass("active");
            });
        });

        $(document).ready(function(){
            $(".side-bar").click(function(){
                $(".sidebar-menu").toggleClass("collapse");
            });
        });
    </script>
<script type="text/javascript" charset="utf8" src="../../assets/vendor/DataTables/datatables.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>

</html>