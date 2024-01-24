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
                                        <a href="" class="text-dark"><span class="fa fa-home"></span></a> &nbsp;/
                                        <a class="text-dark">Tentang Kami</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Profil Madrasah Ibtidaiyah Al Amanah</h3>
                                        <hr>
                                        <div class="row justify-content-between">
                                            <div class="col-sm-12 col-md-6">
                                                <p>
                                                    <span class="fa fa-clock-o"></span> <?= date('d-M-Y, H:i', strtotime($profil->updated_at)) ?> &nbsp;
                                                    <span class="fa fa-user"></span> <?= $profil->updated_by ?> &nbsp;
                                                </p>
                                            </div>
                                            <div class="col-sm-12 col-md-6 text-right">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="section_subtitle">Profil</div><br>
                                        <?= html_entity_decode($profil->profil_umum) ?>
                                        <br>
                                        <div class="section_subtitle">Sejarah</div><br>
                                        <?= html_entity_decode($profil->sejarah) ?>

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