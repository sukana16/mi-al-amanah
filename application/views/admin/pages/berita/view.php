<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('admin/berita') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail <?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/home') ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('admin/berita') ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Detail <?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8">

                    <div class="card">
                        <div class="card-body">
                            <h2><?= $berita->judul ?></h2>
                            <hr>
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <p>
                                        <span class="fas fa-tags"></span> <?= $berita->kategori ?> &nbsp;
                                        <span class="fas fa-clock"></span> <?= date('d-M-Y', strtotime($berita->created_at)) ?> &nbsp;
                                        <span class="fas fa-user"></span> <?= $berita->created_by ?> &nbsp;
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-6 text-right">
                                    <a href="<?= base_url('admin/berita/edit/' . $berita->id) ?>" class="btn btn-sm btn-default"><span class="fas fa-edit"></span>Edit</a>
                                    <a href="<?= base_url('admin/berita/hapus/' . $berita->id) ?>" class="btn btn-sm btn-default"><span class="fas fa-trash"></span>Hapus</a>
                                </div>
                            </div>
                            <hr>

                            <img src="<?= base_url('assets/uploads/berita/' . $berita->gambar) ?>" alt="Tumbnail" style="width: 350px; float:left; margin-right: 20px;" class="img-responsive">
                            <?= html_entity_decode($berita->isi) ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?= base_url('assets/admin/') ?>modules/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.edit-button').click(function() {
            // Get data attributes from the clicked button
            var id = $(this).data('id');
            var oldSlider = $(this).data('old-slider');
            var ket = $(this).data('ket');

            // Set values in the modal form fields
            $('#id').val(id);
            $('#old_slider').val(oldSlider);
            $('#keterangan').val(ket);

            // Optionally, you can also set the initial value for the slider field
            $('#slider').val(''); // Clear the input field

            // Optionally, you can fetch additional data using AJAX and update the form fields accordingly
            // Example:
            // $.ajax({
            //     url: 'get_slider_data.php?id=' + id,
            //     type: 'GET',
            //     dataType: 'json',
            //     success: function(data) {
            //         $('.edit-slider').val(data.slider);
            //         $('.edit-keterangan').val(data.keterangan);
            //     }
            // });

        });

        // Clear the form fields when the modal is closed
        $('#modal-edit').on('hidden.bs.modal', function() {
            $('.edit-id').val('');
            $('.edit-old-slider').val('');
            $('.edit-slider').val('');
            $('.edit-keterangan').val('');
        });
    });
</script>