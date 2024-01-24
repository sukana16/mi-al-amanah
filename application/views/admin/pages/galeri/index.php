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
                <div class="breadcrumb-item"><a href="<?= base_url('admin/slider') ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Data <?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Kelola <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="7%">No</th>
                                        <th>Gambar</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($galeri as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td class="text-center">
                                                <a class="fancybox" rel="ligthbox" href="<?= base_url('assets/uploads/galeri/') . $data->gambar ?>" title="<?= $data->keterangan ?>">
                                                    <img src="<?= base_url('assets/uploads/galeri/') . $data->gambar ?>" alt="Gambar" style="width: 150px;">
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#modal-edit" data-id="<?= $data->id ?>" data-old-gambar="<?= $data->gambar ?>" data-ket="<?= $data->keterangan ?>" class="btn btn-sm btn-default edit-button"><span class="fas fa-edit"></span> Edit</button>
                                                <a href="<?= base_url('admin/galeri/hapus/' . $data->id) ?>" class="btn btn-sm btn-default btn-hapus" data-id="<?= $data->id ?>"><span class="fas fa-trash"></span> Hapus</a>
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
        <form id="form" action="<?= base_url('admin/galeri/tambah'); ?>" enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New <?= $title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="file" class="form-control" name="gambar" id="gambar" required>
                            <small>* Gambar berupa JPG, JPEG dan PNG. Ukuran Maksimal 2 MB</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                        <div class="col-sm-12 col-md-9">
                            <textarea class="form-control" name="keterangan"></textarea>
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
        <form id="form" action="<?= base_url('admin/galeri/edit'); ?>" enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit <?= $title ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="old_gambar" id="old_gambar" value="">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                            <small>* Gambar berupa JPG, JPEG dan PNG. Ukuran Maksimal 2 MB</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                        <div class="col-sm-12 col-md-9">
                            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
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
            var old_gambar = $(this).data('old-gambar');
            var ket = $(this).data('ket');

            // Set values in the modal form fields
            $('#id').val(id);
            $('#old_gambar').val(old_gambar);
            $('#keterangan').val(ket);

            // Optionally, you can also set the initial value for the slider field
            $('#gambar').val(''); // Clear the input field

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
            $('.edit-old-hambar').val('');
            $('.edit-hambar').val('');
            $('.edit-keterangan').val('');
        });
    });
</script>