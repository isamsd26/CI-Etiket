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
                <h2>Pesan Tiket</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="container">
                <h2><?= $pantai['nama_pantai'] ?></h2>
                <p><?= $pantai['detail_pantai'] ?></p>
                <p>Harga Tiket: Rp<?= number_format($pantai['harga_tiket'], 0, ',', '.') ?></p>
                <!-- Tambahkan syarat lainnya di sini -->
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