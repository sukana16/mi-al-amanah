<div class="intro">
    <div class="background_image" style=" background-color: rgba(0, 0, 0, 0.1);"></div>

    <div class="container">
        <div class="row justify-content-between">

            <div class="col-lg-12">
                <div class="intro_content">
                    <div class="section_title_container">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?= base_url('home') ?>" class="text-dark"><span class="fa fa-home"></span></a> &nbsp;/
                                        <a class="text-dark">Berita</a>
                                    </div>
                                </div>
                            </div>

                            <?php foreach ($berita as $key => $value) { ?>
                                <div class="col-lg-12 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="<?= base_url('assets/uploads/berita/' . $value->gambar) ?>" alt="" style="width: 250px; height: 250px">
                                                </div>
                                                <div class="col-lg-9">
                                                    <small>
                                                        <span class="fa fa-tags"></span> <?= $value->kategori ?> &nbsp;
                                                        <span class="fa fa-clock-o"></span> <?= date('d-M-Y, H:i', strtotime($value->created_at)) ?>
                                                    </small>
                                                    <hr>
                                                    <h4 style="text-align:justify; "><a href="<?= base_url('berita/detail/' . $value->slug) ?>" class="text-dark"><?= $value->judul ?></a></h4>
                                                    <p style="text-align:justify;"><?= $value->kutipan ?></p>
                                                    <div class=" mt-3">
                                                        <a href="<?= base_url('berita/detail/' . $value->slug) ?>" class="text-right">Selengkapnya...</a>
                                                    </div>
                                                </div>
                                            </div>
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