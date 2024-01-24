<!-- Home -->
<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

            <?php foreach ($slider as $data) { ?>
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image: url(<?= base_url('assets/uploads/slider/' . $data->slider) ?>); "></div>

                    <div class="home_container slider_home">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center text-light"><?= $data->keterangan ?></h2> <br>
                                    <h6 class="text-center text-light"><?= $data->keterangan ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
                <?php foreach ($slider as $data) { ?>
                    <li class="home_slider_custom_dot trans_200"></li>
                <?php } ?>
                <!-- <li class="home_slider_custom_dot trans_200 active"></li> -->
            </ul>
        </div>

    </div>
</div>


<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="row">

            <!-- Intro Content -->

            <div class="col-lg-5 text-center">
                <div class="intro_content">
                    <div class="section_title_container">
                        <img src="<?= base_url('assets/user/') ?>images/Logo.png" alt="logo" style="width:330px" class="mt-5">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 intro_col">
                <div class="intro_content">
                    <div class="section_title_container">
                        <!-- <div class="section_subtitle">Tentang Kami</div> -->
                        <div class="section_title">
                            <h2>Tentang Kami</h2>
                        </div>
                    </div>
                    <div class="intro_text">
                        <?= html_entity_decode($profil->profil_umum) ?>
                    </div>
                    <div class="text-right">
                        <a href="<?= base_url('tentang_kami') ?>" class="btn btn-default">Selengkapnya &nbsp; <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Why Choose Us -->

<div class="why">
    <!-- <div class="background_image" style="background-image:url(<?= base_url('assets/user/') ?>images/why.jpg)"></div> -->
    <!-- <div class="background_image bg-secondari"></div> -->
    <div class="container">
        <div class="row row-eq-height">

            <!-- Why Choose Us Content -->
            <div class="col-lg-12 order-lg-2 order-1">
                <div class="why_content">
                    <div class="section_title_container">
                        <div class="section_title">
                            <div class="row justify-content-between">
                                <div class="col-lg-3">
                                    <h3>Berita terbaru</h3>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <a href="<?= base_url('berita') ?>" class="btn btn-default">Lihat Semua &nbsp; <span class="fa fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">

                            <?php foreach ($berita as $data) : ?>
                                <div class="col-lg-12 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="<?= base_url('assets/uploads/berita/' . $data->gambar) ?>" alt="" style="width: 250px; height: 250px">
                                                </div>
                                                <div class="col-lg-9">
                                                    <small>
                                                        <span class="fa fa-tags"></span> <?= $data->kategori ?> &nbsp;
                                                        <span class="fa fa-clock-o"></span> <?= date('d-M-Y, H:i', strtotime($data->created_at)) ?>
                                                    </small>
                                                    <hr>
                                                    <h4 style="text-align:justify; "><a href="<?= base_url('berita/detail/' . $data->slug) ?>" class="text-dark"><?= $data->judul ?></a></h4>
                                                    <p style="text-align:justify;"><?= $data->kutipan ?></p>
                                                    <div class=" mt-3">
                                                        <a href="<?= base_url('berita/detail/' . $data->slug) ?>" class="text-right">Selengkapnya...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services -->

<div class="services" style="padding-bottom: 150px;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title_container">
                    <!-- <div class="section_subtitle">This is Dr Pro</div> -->
                    <div class="section_title">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services_row">

            <!-- Service -->
            <?php foreach ($galeri as $data) { ?>
                <div class="col-xl-4 col-md-6 service_col">
                    <div class="service">
                        <div class="service">
                            <a href="<?= base_url('assets/uploads/galeri/' . $data->gambar) ?>" title="<?= $data->keterangan ?>" class="fancybox" rel="ligthbox">
                                <img src="<?= base_url('assets/uploads/galeri/' . $data->gambar) ?>" class="zoom img-fluid " alt="">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-lg-12 text-center">
                <a href="<?= base_url('galeri') ?>" class="btn btn-default">Lihat Semua &nbsp; <span class="fa fa-arrow-right"></span></a>
            </div>

        </div>
    </div>
</div>