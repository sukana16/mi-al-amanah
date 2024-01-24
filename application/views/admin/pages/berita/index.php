<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/berita/tambah') ?>" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('admin/home') ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?= base_url('admin/berita') ?>"><?= $title ?></a></div>
                <div class="breadcrumb-item">Data <?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            Filter
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Data <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped tabble-display">
                                <thead>
                                    <tr>
                                        <th width="7%">No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>User</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($berita as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <?= $data->judul ?>
                                                <div class="table-links">
                                                    <a href="<?= base_url('admin/berita/lihat/' . $data->id) ?>">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/berita/edit/' . $data->id) ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/berita/hapus/' . $data->id) ?>" class="text-danger btn-hapus" data-id="<?= $data->id ?>">Hapus</a>
                                                </div>
                                            </td>
                                            <td><?= $data->kategori ?></td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image" src="<?= base_url('assets/uploads/admin/' . $data->foto) ?>" class="rounded-circle" width="35" data-toggle="title" title="">
                                                    <div class="d-inline-block ml-1"><?= $data->created_by ?></div>
                                                </a>
                                            </td>
                                            <td><?= date("d-M-Y", strtotime($data->created_at)) ?></td>
                                            <td>
                                                <div class="badge badge-primary"><?= $data->status ?></div>
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
        <form id="form" action="<?= base_url('admin/slider/tambah'); ?>" enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slider *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="file" class="form-control" name="slider" id="slider" required>
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
        <form id="form" action="<?= base_url('admin/slider/edit'); ?>" enctype="multipart/form-data" method="post" autocomplete="off">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slider *</label>
                        <div class="col-sm-12 col-md-9">
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="old_slider" id="old_slider" value="">
                            <input type="file" class="form-control" name="slider" id="slider">
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