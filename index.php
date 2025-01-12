<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofio | Tanjung</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
    <style>
        .card-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg px-4 py-4 navbar-dark shadow-white sticky-top bg-dark">
        <div class="container-fluid px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <a class="navbar-brand fs-2 fw-bold" href="#">Tan<span class="color-primary">Web</span></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skils</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Portofolio</a>
                    </li>
                    <!-- login button -->
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
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
    <main class="bg-dark py-xl px-4">
        <section class="py-5">
            <div class="container-fluid px-5">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <p class="fs-4 color-primary fw-bold">
                            <span class="color-primary" id="time"></span>
                        </p>
                        <h3 class="fs-4 fw-bold">Hi, I'am Tanjung</h3>
                        <h1 class="fs-xl fw-bold">Web <span class="color-primary">Developer</span></h1>
                        <p class="fs-6 text-justify">Saya adalah seorang web developer yang berfokus pada pengembangan
                            website
                            yang responsif dan dinamis. Saya memiliki pengalaman dalam pengembangan website
                            menggunakan teknologi terbaru.</p>
                        <div class="sosmed">
                            <div class="item__sosmed">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="item__sosmed">
                                <i class="fa-brands fa-linkedin"></i>
                            </div>
                            <div class="item__sosmed">
                                <i class="fa-brands fa-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="./assets/beranda.png" alt="hero" class="img-fluid" width="75%">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-xl skill" id="skills">
            <div class="container-fluid px-5">
                <div class=" d-flex gap-2">
                    <hr class="line-primary">
                    <h5 class="fs-3 fw-bold">Skils</h5>
                </div>
                <p class="fs-6">Berikut adalah beberapa skill yang saya kuasai</p>
            </div>
            <div class="container-fluid px-5 py-4">
                <div class="row gap-y-3" id="card-skill">
                </div>
            </div>
        </section>
        <section class="py-xl " id="portofolio">
            <div class="container-fluid px-5 mb-4">
                <div class=" d-flex gap-2 mb-5">
                    <hr class="line-primary">
                    <h5 class="fs-3 fw-bold">Portofolio</h5>
                </div>
                <div class="d-flex gap-2">
                    <button href="#" class="glass-primary-active px-4 py-2" id="tab-website" onclick="handleClassTabWeb()">Website</button>
                    <button href="#" class="glass-primary px-4 py-2" id="tab-mobile" onclick="handleClassTabMobile()">Mobile</button>
                </div>
            </div>
            <div class="container-fluid px-5">
                <div class="row gap-y-3 justify-content-center" id="card-portofolio">
                </div>
            </div>
        </section>
        <section class="py-xl ">
            <div class="container-fluid px-5 mb-4">
                <div class=" d-flex gap-2 mb-5">
                    <hr class="line-primary">
                    <h5 class="fs-3 fw-bold">Artikel</h5>
                </div>
            </div>

            <div class="container-fluid px-5">
                <div class="row gap-y-3 justify-content-center gap-5">
                    <?php

                    include 'koneksi.php';

                    $sql = "SELECT * FROM article ORDER BY tanggal";
                    $hasil = $conn->query($sql);

                    while ($row = $hasil->fetch_assoc()) {
                    ?>


                        <div class="card" style="width: 25rem;">
                            <?php
                            if ($row["gambar"] != '') {
                                if (file_exists('assets/images/' . $row["gambar"] . '')) {
                            ?>
                                    <img src="assets/images/<?= $row["gambar"] ?>" class="card-img-top">
                            <?php
                                }
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["judul"] ?></h5>
                                <p class="card-text "><?= $row["isi"] ?></p>
                                <p class="card-text"><small class="text-body-secondary"><br>oleh : <?= $row["username"] ?></small></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>


        </section>
        <section class="py-xl ">
            <div class="container-fluid px-5 mb-4">
                <div class=" d-flex gap-2 mb-5">
                    <hr class="line-primary">
                    <h5 class="fs-3 fw-bold">Gallery</h5>
                </div>
            </div>
            <div class="container-fluid px-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $sql = "SELECT * FROM gallery";
                        $hasil = $conn->query($sql);
                        $i = 0;
                        while ($row = $hasil->fetch_assoc()) {
                        ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></button>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php 
                        $sql = "SELECT * FROM gallery";
                        $hasil = $conn->query($sql);
                        $i = 0;
                        while ($row = $hasil->fetch_assoc()) {
                        ?>
                            <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/images/<?= $row["gambar"] ?>" class="d-block w-50" alt="...">
                                </div>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


        </section>
    </main>

    <footer>
        <div class="container-fluid px-5 py-4">
            <div class="d-flex justify-content-between">
                <p class="fs-6">© 2024 Tanjung</p>
                <p class="fs-6">Made with ❤️ by Tanjung</p>
            </div>
        </div>
    </footer>

    <script src="./script.js"></script>
    <script src="./theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        const dataSkill = [{
                icon: './assets/icons/html-5.svg',
                title: 'HTML',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/css.svg',
                title: 'CSS',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/javascipt.svg',
                title: 'Javascript',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/php.svg',
                title: 'PHP',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/laravel.svg',
                title: 'Laravel',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/react.svg',
                title: 'React',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/vue-js.svg',
                title: 'Vue',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/node-js.svg',
                title: 'NodeJS',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/spring-boot.svg',
                title: 'Laravel',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/flutter.svg',
                title: 'React',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/next-js.svg',
                title: 'NextJS',
                level: 'Intermediate'
            },
            {
                icon: './assets/icons/tailwind.svg',
                title: 'Tailwind',
                level: 'Intermediate'
            },
        ];

        function getData() {
            const cardSkill = document.getElementById('card-skill');
            const cardPortofolio = document.getElementById('card-portofolio');
            dataSkill.forEach((item) => {
                cardSkill.innerHTML += `
                        <div class="col-md-3 mb-4">
                            <div class="card text-white py-3 px-4 d-flex flex-row gap-4 align-items-center">
                                <img src="${item.icon}" alt="" width="15%">
                                <div class="mt-3">
                                    <h5 class="fs-6 fw-bold">${item.title}</h5>
                                    <p class="hidden">${item.level}</p>
                                </div>
                            </div>
                        </div>
                    `;
            });

        }
        getData();
    </script>
</body>

</html>