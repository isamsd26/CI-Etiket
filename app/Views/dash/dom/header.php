<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/banten.png'); ?>" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?= ($activePage == 'home') ? 'active' : '' ?>" href="<?= base_url(); ?>">Home</a></li>
                <li><a class="nav-link scrollto <?= ($activePage == 'wisata') ? 'active' : '' ?>" href="<?= base_url('page/wisata'); ?>">Wisata</a></li>
                <li class="ms-3"><a class="nav-link btn btn-primary pe-4 rounded-pill <?= ($activePage == 'login') ? 'active' : '' ?>" href="<?= base_url('login'); ?>">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->