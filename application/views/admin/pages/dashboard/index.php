<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- <div class="alert alert-danger">asas</div> -->
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <b>Selamat datang <?= $this->session->userdata('nama') ?> !!</b>, Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="c0l-sm-6 col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Slider</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-arrow-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c0l-sm-6 col-md-6">
                    <div class="card card-secondary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Berita</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-newspaper"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c0l-sm-6 col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Galeri</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-images"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Konfigurasi Profil</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-cogs"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>