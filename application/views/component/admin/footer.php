<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2023. <div class="bullet"></div> Design By <a href="#">Dwi Fristtikasari</a>
    </div>
    <div class="footer-right">

    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url('assets/admin/') ?>modules/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/popper.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/tooltip.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/moment.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url('assets/admin/') ?>modules/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/datatables/datatables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>



<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="<?= base_url('assets/admin/') ?>js/scripts.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/custom.js"></script>

<script>
    $(document).ready(function() {

        // Menghentikan tautan dari navigasi langsung
        $('.btn-hapus').on('click', function(event) {
            event.preventDefault();
            var href = $(this).attr('href');

            // Menampilkan dialog konfirmasi SweetAlert
            swal({
                title: "Yakin, data akan dihapus?",
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Jika pengguna mengkonfirmasi logout, arahkan ke URL logout
                    window.location.href = href;
                }
            });
        });

    });
</script>

<?php
if ($this->session->flashdata('success')) { ?>
    <script>
        var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
        $(document).ready(function() {
            swal("Good Job!", successMessage, "success");
        });
    </script>
<?php } else if ($this->session->flashdata('warning')) { ?>
    <script>
        var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
        $(document).ready(function() {

            swal("Oops!", warningMessage, "warning");
        });
    </script>
<?php } else if ($this->session->flashdata('error')) { ?>
    <script>
        var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
        $(document).ready(function() {

            swal("Error!", errorMessage, "error");
        });
    </script>
<?php } ?>

<script>
    $(".table").dataTable();
</script>

<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });

    $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "Choose File", // Default: Choose File
        label_selected: "Change File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });
</script>
</body>

</html>