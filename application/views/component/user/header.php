<!DOCTYPE html>
<html lang="en">

<head>
    <title>MIS Al Amanah &mdash; <?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url('') ?>assets/user/images/Logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>assets/user/images/Logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="MA Al Amanah">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?= base_url('assets/user/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="<?= base_url('assets/user/') ?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/user/') ?>styles/responsive.css">

    <style>
        .slider_home {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 70%;
            padding-bottom: 70%;
        }

        img.zoom {
            width: 100%;
            height: 200px;
            border-radius: 5px;
            object-fit: cover;
            transition: transform 0.3s;
            /* Efek transisi selama 0.3 detik */
        }

        img.zoom:hover {
            transform: scale(1.2);
            /* Membesarkan gambar sebanyak 10% saat dihover */
        }

        .modal-header {

            border-bottom: none;
        }

        .modal-title {
            color: #000;
        }

        .modal-footer {
            display: none;
        }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_400">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <!-- Logo -->
                <div class="logo">
                    <a href="#">
                        <div>Madrasah<span>Ibtidaiyah</span></div>
                        <div>AL Amanah Kec. Cipeundeuy</div>
                    </a>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li class="<?= $this->uri->segment(1) == "" || $this->uri->segment(1) == "home" ? "active" : "" ?>"><a href="<?= base_url('home') ?>">Home</a></li>
                        <li class="<?= $this->uri->segment(1) == "tentang_kami" ? "active" : "" ?>"><a href="<?= base_url('tentang_kami') ?>">Tentang Kami</a></li>
                        <li class="<?= $this->uri->segment(1) == "visi_misi" ? "active" : "" ?>"><a href="<?= base_url('visi_misi') ?>">Visi Misi</a></li>
                        <li class="<?= $this->uri->segment(1) == "struktur_organisasi" ? "active" : "" ?>"><a href="<?= base_url('struktur_organisasi') ?>">Struktur Organisasi</a></li>
                        <li class="<?= $this->uri->segment(1) == "berita" ? "active" : "" ?>"><a href="<?= base_url('berita') ?>">Berita</a></li>
                        <li class="<?= $this->uri->segment(1) == "galeri" ? "active" : "" ?>"><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                    </ul>
                </nav>
                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">



                    <!-- Appointment Button -->
                    <div class="button button_2 header_button"><a href="<?= base_url('login') ?>"> Login Admin &nbsp; <span class="fa fa-sign-in"></span></a></div>

                    <!-- Header Social -->
                    <div class="social header_social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <!-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>

                    <!-- Hamburger -->
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu_overlay trans_400"></div>
        <div class="menu trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul>
                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                    <li><a href="<?= base_url('tentang_kami') ?>">Tentang Kami</a></li>
                    <li><a href="<?= base_url('visi_misi') ?>">Visi Misi</a></li>
                    <li><a href="<?= base_url('struktur_organisasi') ?>">Struktur Organisasi</a></li>
                    <li><a href="<?= base_url('berita') ?>">Berita</a></li>
                    <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_link"><a href="<?= base_url('login') ?>">Login Admin</a></div>
            </div>
            <div class="social menu_social">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <!-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> -->
                </ul>
            </div>
        </div>