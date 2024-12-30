<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();

    include './koneksi.php';

    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    ?>
    <nav class="navbar navbar-expand-lg px-4 py-4 navbar-dark shadow-white sticky-top bg-dark">
        <div class="container-fluid px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a class="navbar-brand fs-2 fw-bold" href="index.php">Tan<span class="color-primary">Web</span></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=article">Article</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <div class="theme__pointer" onclick="changeTheme()" id="theme">

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section id="content" class="p-5">
            <div class="container ">
                <?php
                if (isset($_GET['page'])) { 
                    ?>
                    <?php include('dashboard/'. $_GET['page'].".php"); ?>
                <?php   
                }
                else {
                ?>
                    <h4>Dashboard</h4>
               <?php 
               include("dashboard/dashboard.php");
               }
                ?>
            </div>

        </section>

    </main>
    <footer class="">
        <div class="container-fluid px-5 py-4">
            <div class="d-flex justify-content-between">
                <p class="fs-6">© 2024 Tanjung</p>
                <p class="fs-6">Made with ❤️ by Tanjung</p>
            </div>
        </div>
    </footer>

    <?php 
    $conn->close()
    ?>
    <script src="./theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>