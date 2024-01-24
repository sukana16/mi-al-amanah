<div class="intro">
    <div class="background_image" style=" background-color: rgba(0, 0, 0, 0.1);"></div>

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
                                        <a href="<?= base_url('berita') ?>" class="">Berita</a>&nbsp;/
                                        <a class="text-dark">Detail</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3><?= $berita->judul ?></h3>
                                                <hr>
                                                <small>
                                                    <span class="fa fa-tags"></span> <?= $berita->kategori ?> &nbsp;
                                                    <span class="fa fa-clock-o"></span> <?= date('d-M-Y, H:i', strtotime($berita->created_at)) ?> &nbsp;
                                                    <span class="fa fa-user"></span> <?= $berita->created_by ?>
                                                </small>
                                                <hr>
                                                <img src="<?= base_url('assets/uploads/berita/' . $berita->gambar) ?>" alt="Tumbnail" style="width: 350px; float:left; margin-right: 20px;" class="img-responsive">
                                                <?= html_entity_decode($berita->isi) ?>
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