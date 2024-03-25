<!-- Main Footer -->
<footer class="main-footer text-center" style="background: transparent; width: 50%; margin: 0 auto;">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024  <a href="#">Company</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="<?= base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url()?>public/admin/dist/js/sweetalert.js"></script>
<!-- Summernote -->
<script src="<?= base_url()?>public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- pace-progress -->
<script src="<?= base_url()?>public/admin/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url()?>public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/admin/dist/js/adminlte.min.js"></script>
<!-- iziToast JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
      <!-- show sweet alert code start  -->
      <?php 
      if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
      ?>
      <script>
      Swal.fire({
          title: "<?= $_SESSION['status']; ?>",
          icon: "<?= $_SESSION['status_code']; ?>",
          showConfirmButton: true,
      });
      </script>
      <?php
          unset($_SESSION['status']);
      }
      ?>
      <!-- show sweet alert code start  -->
      <script>
      $(function () {
        // Summernote
        $('.textarea').summernote({
          height:'250px'
        });
      });
</script>
</body>
</html>