<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CI Blog Web App</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/bootstrap/css/bootstrap.min.css">
  <!-- AdminLTE App -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/dist/css/adminlte.min.css">
<!-- iziToast CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

<!-- iziToast JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>




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
        <input type="text" class="form-control <?= (form_error('username') != "") ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div id="username"  class="invalid-feedback fs-5"><?= form_error('username');?></div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control <?= (form_error('password') != "") ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <div id="password"  class="invalid-feedback fs-5"><?= form_error('password');?></div>
      </div>
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
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- form validation start -->
<script>
    $(document).ready(function() {
        $('#loginForm input').on('input', function() {
            const input = $(this);
            const errorDiv = input.next('.invalid-feedback');

            if (input.val().trim() !== '') {
                input.removeClass('is-invalid');
                errorDiv.text('');
            } else {
                input.addClass('is-invalid');
                errorDiv.text(input.attr('data-error'));
            }
        });
    });
</script>
<?php if ($this->session->flashdata('msg')): ?>
    <script>
        $(document).ready(function () {
            iziToast.error({
                title: 'Error',
                message: '<?= $this->session->flashdata('msg') ?>',
                position: 'topRight',
                timeout: 5000, // Duration in milliseconds
                closeOnClick: true, // Close the toast when clicked
            });
        });
    </script>
<?php endif; ?>

</html>
