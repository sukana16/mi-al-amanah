<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>MIS Al Amanah &mdash; <?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url('') ?>assets/user/images/Logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>assets/user/images/Logo.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('assets/uploads/admin/' . $this->session->userdata('foto')) ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('nama') ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                            <a href="<?= base_url('admin/profil_user/' . $this->session->userdata('username')) ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profil User
                            </a>
                            <!-- <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>