<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('admin/berita') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit <?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/home') ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('admin/berita') ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Edit <?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Catatan</h2>
            <p class="section-lead"><b>* = Tidak boleh kosong</b>, Jika tidak merubah gambar maka field gambar baru tidak perlu diisi</p>

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Edit <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/berita/edit/' . $berita->id) ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="hidden" name="id" value="<?= $berita->id ?>">
                                        <input type="text" class="form-control" name="judul" placeholder="Masukkan judul" value="<?= $berita->judul ?>" required>
                                        <?= form_error('judul', '<span class="text-danger"></span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control" name="slug" placeholder="Masukkan slug" value="<?= $berita->slug ?>" readonly required>
                                        <?= form_error('slug', '<span class="text-danger"></span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <select name="kategori" id="kategori" class="form-control" required>
                                            <option value="" disabled>Pilih Kategori</option>
                                            <?php foreach ($kategori as $data) { ?>
                                                <option value="<?= $data->id ?>" <?= $berita->kategori_id == $data->id ? "selected" : "" ?>><?= $data->kategori ?></option>
                                            <?php } ?>
                                        </select>
                                        <?= form_error('kategori', '<span class="text-danger"></span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea name="isi" id="content" required><?= $berita->isi ?></textarea>
                                        <?= form_error('isi', '<span class="text-danger"></span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kutipan *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control" name="kutipan"><?= $berita->kutipan ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar lama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" name="old_gambar" value="<?= $berita->gambar ?>">
                                        <img src="<?= (!empty($berita->gambar)) ? base_url('assets/uploads/berita/' . $berita->gambar) : '' ?>" alt="Current Image" style="max-width: 250px; margin-top: 10px;">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar baru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="gambar" id="image-upload" />
                                        </div>
                                        <small>* Gambar berupa JPG, JPEG dan PNG. Ukuran Maksimal 5 MB</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <select name="status" id="status" class="form-control" required>
                                            <?php foreach ($status as $s) { ?>
                                                <option value="<?= $s['value'] ?>" <?= $berita->status == $s['value'] ? "selected" : "" ?>><?= $s['status'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <?= form_error('status', '<span class="text-danger"></span>') ?>
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

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    CKEDITOR.replace('content');

    $(document).ready(function() {

        $('input[name="judul"]').on('input', function() {
            var judul = $(this).val();
            var slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/-$/, '').replace(/^-/, '');
            $('input[name="slug"]').val(slug);
        });

    });
</script>