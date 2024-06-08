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
    <!-- ======= Header ======= -->
    <?= $this->include('dash/dom/header') ?>

    <main id="main">
        <!-- ======= Pilihan Pantai ======= -->
        <div class="container margin-top">
            <div class="section-title">
                <h2>Pilihan Pantai Terbaik</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <?php foreach ($pantai as $p) : ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card card-w mb-5">
                            <img src="<?= base_url('assets/img/' . $p['gambar']) ?>" class="card-img-top img-w" alt="<?= $p['nama_pantai'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p['nama_pantai'] ?></h5>
                                <p class="card-text"><?= $p['detail_pantai'] ?></p>
                                <p class="card-text"><strong>Harga Tiket:</strong> Rp<?= number_format($p['harga_tiket'], 0, ',', '.') ?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url('pesan/' . $p['id']) ?>" class="btn btnx mb-3"><i class="fa-solid fa-cart-shopping me-1" style="color: #050505;"></i>Pesan Tiket</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div><!-- End Pilihan Pantai -->

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