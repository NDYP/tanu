<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Puskesmas-Tangkling</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/'); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eStartup - v2.0.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header header-hide">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto"><span>Puskesmas</span> Tangkiling</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="assets/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu"><a href="<?= base_url('beranda'); ?>">Beranda</a></li>
                    <li class="menu-has-children"><a>Tentang Kami</a>
                        <ul>
                            <li><a href="<?= base_url('profil'); ?>">Visi Misi</a></li>
                            <li><a href="<?= base_url('profil/sejarah'); ?>">Sejarah</a></li>
                            <li><a href="<?= base_url('profil/struktur'); ?>">Struktur</a></li>
                            <li><a href="<?= base_url('profil/map'); ?>">Map</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a>Fasilitas</a>
                        <ul>
                            <li><a href="<?= base_url('layanan'); ?>">Layanan</a></li>
                            <li><a href="<?= base_url('kamar_inap'); ?>">Kamar Inap</a></li>
                            <li><a href="<?= base_url('fasilitas'); ?>">Daftar Peralatan</a></li>
                            <li><a href="<?= base_url('fasilitas_pembantu'); ?>">Fasilitas Pembantu</a></li>
                            <li><a href="<?= base_url('sistem_penunjang'); ?>">Sistem Penunjang</a></li>
                        </ul>
                    </li>
                    <li><a href=" <?= base_url('berita'); ?>">Berita</a></li>
                    <li><a href="<?= base_url('galeri'); ?>">Galeri</a></li>
                    <li><a href="<?= base_url('jadwal'); ?>">Jadwal</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- End Header -->