<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wisata Pantai Anyer</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="<?= base_url('assets'); ?>//img/banten.png" rel="icon">
    <link href="<?= base_url('assets'); ?>//img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets'); ?>//vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>//vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>//vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets'); ?>//css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Hero Section ======= -->
    <?= $this->include('dash/dom/hero') ?>
    <!-- End Hero -->

    <!-- ======= Header ======= -->
    <?= $this->include('dash/dom/header') ?>

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Wisata Pantai Anyer</h2>
                    <p class="fs-5">Kumpulan pantai indah yang ada di Banten. Jangan kelewatan jika anda dan keluarga sedang berkunjung ke Anyer! </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <div id="carouselExampleInterval" class="carousel slide car" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src=" <?= base_url('assets'); ?>//img/anyer.jpg" class="d-block w-100 img-car" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="<?= base_url('assets'); ?>//img/bolong.jpg" class="d-block w-100 img-car" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets'); ?>//img/indah.jpeg" class="d-block w-100 img-car" alt="...">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Ada sangat banyak pilihan pantai yang ada di Banten kota Serang ini.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Pilihan Pantai ======= -->
        <section class="more-services section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Pilihan Pantai Terbaik</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="row">
                    <?= $this->include('dash/dom/pantai') ?>
                </div>

            </div>
        </section><!-- End Pilihan Pantai -->

        <!-- ======= Info Box Section ======= -->
        <section class="info-box py-0">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url(<?= base_url('assets'); ?>//img/info-box.jpg);">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Info Box Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('dash/dom/footer') ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets'); ?>//vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('assets'); ?>//vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets'); ?>//js/main.js"></script>

</body>

</html>