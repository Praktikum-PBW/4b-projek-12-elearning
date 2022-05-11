<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku-Guru</title>
     <link rel="icon" href="../../assets/img/graduation.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/DataTables/datatables.css">
</head>

<body style="background: #f7f7f7;">
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-success p-3">
        <div class="container">
            <a class="navbar-brand fw-bolder text-white" href="#">Guruku | Guru</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                    </li>
                    <div class="nav-item">
                        <a href="index.php?page=materi" class="nav-link"><i class="fa-solid fa-book-bookmark"></i> Materi</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> <?= $_SESSION['guru'] ?>
                        </a>
                        <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php
            include "menu.php";
        ?>
    </div>

    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".navbar-nav").on("click", "a", function () {
            $(".navbar-nav a.active").removeClass("active");
            $(this).addClass("active");
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