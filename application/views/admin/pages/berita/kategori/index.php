<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Add New</button>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/home') ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('admin/kategori') ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Data <?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Data <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="7%">No</th>
                                        <th>Kategori</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data->kategori ?></td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modal-edit" data-id="<?= $data->id ?>" data-kategori="<?= $data->kategori ?>" class="btn btn-sm btn-default edit-button"><span class="fas fa-edit"></span> Edit</button>

                                                <?php if (count($kategori) > 1) : ?>
                                                    <a href="<?= base_url('admin/kategori/hapus/' . $data->id) ?>" class="btn btn-sm btn-default btn-hapus" data-id="<?= $data->id ?>"><span class="fas fa-trash"></span> Hapus</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-add">
    <div class="modal-dialog" role="document">
        <form id="form" action="<?= base_url('admin/kategori/tambah'); ?>" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New <?= $title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="text" class="form-control" name="kategori" placeholder="Masukkan kategori" required>
                            <small>* Kategori tidak boleh sama dengan data yang sudah ada</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-9">
                            <small><b>* = Tidak Boleh Kosong</b></small>
                        </div>
                    </div>


                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-edit">
    <div class="modal-dialog" role="document">
        <form id="form" action="<?= base_url('admin/kategori/edit'); ?>" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit <?= $title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="hidden" name="id" id="id" value="">
                            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori" value="" required>
                            <small>* Kategori tidak boleh sama dengan data yang sudah ada</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-9">
                            <small><b>* = Tidak Boleh Kosong</b></small>
                        </div>
                    </div>


                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?= base_url('assets/admin/') ?>modules/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.edit-button').click(function() {
            // Get data attributes from the clicked button
            var id = $(this).data('id');
            var kategori = $(this).data('kategori');

            // Set values in the modal form fields
            $('#id').val(id);
            $('#kategori').val(kategori);

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
            $('.edit-kategori').val('');
        });
    });
</script>