<div class="intro">
    <!-- <div class="background_image" style=" background-color: rgba(0, 0, 0, 0.1);"></div> -->

    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-9">
                <div class="intro_content">
                    <div class="section_title_container">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?= base_url('home') ?>" class="text-dark"><span class="fa fa-home"></span></a> &nbsp;/
                                        <a class="text-dark">Galeri</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
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

                                            <div class="col-lg-12 mb-2">
                                                <!-- Tampilkan link pagination -->
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination justify-content-center">
                                                        <?php echo $this->pagination->create_links(); ?>
                                                    </ul>
                                                </nav>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="intro_content">
                    <div class="section_title_container">
                        <div class="list-group">
                            <a class="list-group-item text-dark"><b>Post Terbaru</b><br></a>
                            <?php foreach ($beritas as $key => $value) { ?>
                                <a href="<?= base_url('berita/detail/' . $value->slug) ?>" class="list-group-item list-group-item-action">
                                    <p class="text-dark"><?= $value->judul ?></p>
                                    <small>
                                        <span class="fa fa-clock-o"></span> <?= date('d-M-Y, H:i', strtotime($value->created_at)) ?>
                                    </small>
                                </a>
                            <?php } ?>
                            <a href="" class="list-group-item text-dark text-center">Selengkapnya...<br></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>