<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <!-- <div class="section-header-back">
                <a href="<?= base_url('admin/berita') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div> -->
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/home') ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Catatan</h2>
            <p class="section-lead"><b>* = Tidak boleh kosong</b>, Jika tidak merubah gambar maka field gambar baru tidak perlu diisi</p>

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/profil/edit/' . $profil->id) ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sejarah *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea name="sejarah" id="sejarah" required><?= $profil->sejarah ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profil Umum *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea name="profil_umum" id="profil_umum" required><?= $profil->profil_umum ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Visi *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea name="visi" id="visi" required><?= $profil->visi ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Misi *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea name="misi" id="misi" required><?= $profil->misi ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Struktur Organisasi lama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" name="old_so" value="<?= $profil->so ?>">
                                        <img src="<?= (!empty($profil->so)) ? base_url('assets/uploads/so/' . $profil->so) : '' ?>" alt="Current Image" style="max-width: 250px; margin-top: 10px;">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Struktur Organisasi baru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="so" id="image-upload" />
                                        </div>
                                        <small>* Gambar berupa JPG, JPEG dan PNG. Ukuran Maksimal 5 MB</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    CKEDITOR.replace('sejarah');
    CKEDITOR.replace('profil_umum');
    CKEDITOR.replace('visi');
    CKEDITOR.replace('misi');
</script>