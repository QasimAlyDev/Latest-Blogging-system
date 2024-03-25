<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CI Blog Web App</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/bootstrap/css/bootstrap.min.css">
  <!-- AdminLTE App -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Source Sans Pro', sans-serif;
      background-image: url("<?= base_url()?>public/admin/dist/img/background.jpg");
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 360px;
    }

    .login-logo a {
      color: #333;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
    }

    .login-box-msg {
      margin-top: 0;
      margin-bottom: 20px;
      font-weight: bold;
      text-align: center;
      color: #333;
    }

    .input-group-text {
      background-color: #7864E4;
      border-color: #7864E4;
      color: #fff;
    }

    .btn {
      background-color: #7864E4;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 8px 13px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #5f4bd8;
    }

    .text-red {
      color: red;
    }
  </style>
</head>

<body>

  <div class="login-box">
    <div class="login-logo">
      <a href="#abhi-nhi-lagaya">Blog Web App</a>
    </div>
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?= base_url().'admin/login/authenticate'?>" name="loginForm" id="loginForm" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <h6 class="text-red font-weight-bold">
        <?= form_error('username'); ?>
      </h6>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <h6 class="text-red font-weight-bold">
        <?= form_error('password'); ?>
      </h6>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-block text-white">Sign In</button>
        </div>
      </div>
    </form>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url()?>public/admin/dist/js/adminlte.min.js"></script>
  <?php
    if ($this->session->flashdata('msg')) {
        echo '<script>';
        echo '$(document).ready(function(){';
        echo 'toastr.error("' . $this->session->flashdata('msg') . '");';
        echo '});';
        echo '</script>';

        // Clear the session flash data
        $this->session->set_flashdata('msg', '');
    }
?>


</body>

</html>