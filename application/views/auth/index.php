<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $tittle ?></title>
    <link rel="icon" type="image/x-icon" href="assets/logo_sthira.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/') ?>vendor/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><?= $tittle ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Location</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url(<?= base_url('assets/img/bg-masthead.jpg') ?>);">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Sthira</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Kami merupakan Team Designer dari Universitas Syiah Kuala.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section" style="background-image: linear-gradient(to bottom, #000 0%, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.8) 100%), url(<?= base_url('assets/img/about-bg.jpg') ?>)" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white text-center mb-4">Apa itu Sthira ?</h2>
                    <p class="text-white-50 text-center">
                        Sthira merupakan salah satu team design yang dibentuk pada tahun 2020. untuk memenuhi tugas dari mata kuliah design . Nama Sthira sendiri diambil dari bahasa jawa kuno sendiri yang bermakna Kuat, Tabah, Tepercaya dan dapat diandalkan <br>
                        Kami berharap team kami sesuai dengan arti/makna dari sthira tersebut. <br> <a href="#about2">Member of Sthira.</a> , <a href="#about3">Filosofi Logo.</a>
                    </p>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid" src="assets/img/logo_sthira.png" alt="..." />
            </div>
        </div>
    </section>
    <!-- about-patner sthira -->
    <section class="about-section2 my-0 bg-light" id="about2">
        <div class="text-center "><br><br>
            <h2 class="text-black  mb-3">Member of Sthira</h2>
        </div> <br><br>
        <div class="container">
            <div class="row ">
                <div class="card mb-3 col-sm-6 g-0">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/img/fakhri.jpg') ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title text"><strong>Fakhri Nukman</strong></h5>
                                <p class="card-text">1908001010042 </p>
                                <p class="card-text">Banda Aceh,14 November 1999</p> <br>
                                <p class="card-text"><em>"In the middle of a difficulty lies opportunity." - Albert Einstein </em></p> <br>
                                <p class="card-text"><small class="text-muted">Ketua Team</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-sm-6 g-0">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?= base_url('assets/img/dina.jpg') ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Dina Maisura</strong></h5>
                                <p class="card-text">1908001010019</p>
                                <p class="card-text">Simeulue,09 April 2002</p> <br>
                                <p class="card-text"><em>"The journey of a thousand miles begins with one step." - Lao Tzu</em></p> <br>
                                <p class="card-text"><small class="text-muted">Sekretaris Team</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section3 my-0  bg-light" id="about3">
        <div class="container col-lg align-items-center justify-content-center">
            <div class="col-lg  align-items-center justify-content-center"> <br><br>
                <h2 class="text-center  mb-3">Filosofi Logo</h2> <br><br>
                <div class="col-lg d-flex justify-content-center">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/VvOaNHwPg34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-lg-8 d-flex col-sm"> <iframe width="680" height="435" src="https://www.youtube.com/embed/4A34MQZYM8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="col-lg-4 col-sm">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Presentasi Web Design</h4>
                        <p class="text-black-50 mb-0">Membuat design simple untuk tampilan dari sebuah website e commerce , dengan tujuan agar memudahkan programer dalam membuat website nya . design ini dibuat menggunakan software adobe ilustratorr</p>
                    </div>
                </div>
            </div>

            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/project-1.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Flat ilustration</h4>
                                <p class="mb-0 text-white-50">Flat illustration adalah ilustrasi dengan style minimalis dan simple.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/project-2.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Poster</h4>
                                <p class="mb-0 text-white-50">Poster adalah media publikasi yang terdiri atas tulisan, gambar ataupun kombinasi antar keduanya dengan tujuan memberikan informasi kepada khalayak ramai.</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 75%, #000 100%), url(<?= base_url('assets/img/bg-signup.jpg') ?>)" id="signup">
        <div class="text-center align-items-start ">
            <h2 class="text-light ">My Location</h2>
        </div> <br><br>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.2174236358774!2d95.32790381426433!3d5.534735635403245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304039e08c4020e3%3A0x41630a4493342d56!2sBengkel%20Motor%20Fakhri!5e0!3m2!1sid!2sid!4v1650727440789!5m2!1sid!2sid" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+62 823 6090 8254 <br> (Fakhri)</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+62 822 2584 9350 <br> (Dina)</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="https://mail.google.com/mail/u/0/?tab=km#inbox?compose=DmwnWstwPJttcdxKRFRDqgvfMFBGbtPFjpWxQpjsrPdvgMFsxcswCFkSNFkrQFHsKfgdQhVSCxrq">sthira.team30@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://id.pinterest.com/sthirateam/"><i class="fa-brands fa-pinterest-p"></i></i></a>
                <a class="mx-2" href="https://www.instagram.com/sthira.team30/"><i class="fa-brands fa-instagram"></i></i></a>
                <a class="mx-2" href="https://www.behance.net/sthirateam"><i class="fa-brands fa-behance"></i></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Sthira Website <?= date('Y'); ?></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>vendor/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>