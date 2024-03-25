
<?php $this->load->view('admin/header') ?>
<style>
  .iziToast-wrapper{
    margin-top: 20px;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?= base_url()?>public/admin/dist/img/blogone.jpg" style="height:600px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= base_url()?>public/admin/dist/img/blogtwo.jpg" style="height:600px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url()?>public/admin/dist/img/blogthree.jpg" style="height:600px;" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- when user logged in after access the login page through url then show the error izitoast  message and redirect to dashboard -->
  <?php if ($this->session->flashdata('msg')): ?>
    <script>
        $(document).ready(function () {
            iziToast.error({
                title: 'warning',
                message: '<?= $this->session->flashdata('msg') ?>',
                position: 'topRight',
                timeout: 5000, // Duration in milliseconds
                closeOnClick: true, // Close the toast when clicked
            });
        });
    </script>
<?php endif; ?>
  <?php $this->load->view('admin/footer') ?>
