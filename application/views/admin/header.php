<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peace Blog Center</title>
  <!-- Add favicon link -->
  <link rel="icon" type="image/x-icon" href="<?= base_url()?>public/admin/dist/img/blog.png">
  <!-- Pace Progress -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons 6.5.1-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <!-- Summernote -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url()?>public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AdminLTE Theme -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Custom Style Sheet -->
  <link rel="stylesheet" href="<?= base_url()?>public/admin/dist/css/stylee.css">
  
  <style>

    /* Navbar */
    .navbar {
      background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
    }
    .active{
      background-color:transparent !important;
      color:black !important;
      box-shadow: none !important;
    }
    /* Icons */
    .nav-icon {
      color: #666EE4; 
      /* Customize icon color */
      /* Add other icon styles */
    }

    /* Typography */
    body {
      font-family: 'Source Sans Pro', sans-serif;
      /* Add other typography styles */
    }

    /* Responsive Design */
    @media (max-width: 767px) {
      /* Add styles for smaller screens */
    }
    .pace {
    -webkit-pointer-events: none;
    pointer-events: none;

    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;

    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 2000;
    width: 100%;
    height: 6px;
    background: #fff;
  }

  .pace-inactive {
    display: none;
  }

  .pace .pace-progress {
    background-color: #043467;
    position: fixed;
    top: 0;
    bottom: 0;
    right: 100%;
    width: 100%;
    overflow: hidden;
    height: 12px;
  }

  .pace .pace-activity {
    position: fixed;
    top: 0;
    right: -32px;
    bottom: 0;
    left: 0;
    height: 12px;

    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);

    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.2)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.2)), color-stop(0.75, rgba(255, 255, 255, 0.2)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-background-size: 32px 32px;
    -moz-background-size: 32px 32px;
    -o-background-size: 32px 32px;
    background-size: 32px 32px;

    -webkit-animation: pace-theme-barber-shop-motion 500ms linear infinite;
    -moz-animation: pace-theme-barber-shop-motion 500ms linear infinite;
    -ms-animation: pace-theme-barber-shop-motion 500ms linear infinite;
    -o-animation: pace-theme-barber-shop-motion 500ms linear infinite;
    animation: pace-theme-barber-shop-motion 500ms linear infinite;
  }

  @-webkit-keyframes pace-theme-barber-shop-motion {
    0% { -webkit-transform: none; transform: none; }
    100% { -webkit-transform: translate(-32px, 0); transform: translate(-32px, 0); }
  }
  @-moz-keyframes pace-theme-barber-shop-motion {
    0% { -moz-transform: none; transform: none; }
    100% { -moz-transform: translate(-32px, 0); transform: translate(-32px, 0); }
  }
  @-o-keyframes pace-theme-barber-shop-motion {
    0% { -o-transform: none; transform: none; }
    100% { -o-transform: translate(-32px, 0); transform: translate(-32px, 0); }
  }
  @-ms-keyframes pace-theme-barber-shop-motion {
    0% { -ms-transform: none; transform: none; }
    100% { -ms-transform: translate(-32px, 0); transform: translate(-32px, 0); }
  }
  @keyframes pace-theme-barber-shop-motion {
    0% { transform: none; transform: none; }
    100% { transform: translate(-32px, 0); transform: translate(-32px, 0); }
  }

</style>
</head>
<body class="hold-transition sidebar-mini pace-primary">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Language Selection Dropdown -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="changeLanguage('english')">English</a>
                <a class="dropdown-item" href="#" onclick="changeLanguage('urdu')">اردو</a>
            </div>
        </li>
        <!-- Profile Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="<?= base_url()?>public/admin/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image" style="width: 32px; height: 32px; object-fit: cover;">
                <strong class="text-white">Administrator</strong>
                <i class="fas fa-angle-down text-white"></i> <!-- Dropdown Icon -->
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow">
                <a class="dropdown-item" href="<?= base_url().'admin/Allerror/profile' ?>"><i class="fas fa-user"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="<?= base_url().'admin/login/logout';?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-secondary elevation-1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text" style="display: inline-block; padding: 5px; background-color: #f8f9fa; border-radius: 5px;">
        <img src="<?= base_url().'public/admin/dist/img/logo.png' ?>" width="230px" height="90px" alt="">
      </span>
    </a>
    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class -->
          <li class="nav-item">
            <a href="<?= base_url().'admin/home/index' ?>" class="nav-link">
              <i class="fa-solid fa-tv "></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url().'admin/category/create' ?>" class="nav-link">
                  <i class="fa-solid fa-circle-plus "></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url().'admin/category/index' ?>" class="nav-link">
                  <i class="fa-solid fa-eye "></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url().'admin/article/create'?>" class="nav-link">
                  <i class="fa-regular fa-newspaper "></i>
                  <p>Create Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url().'admin/article/index'?>" class="nav-link">
                  <i class="fa-regular fa-eye "></i>
                  <p>View Articles</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    var currentUrl = window.location.href;

    // Loop through each navigation item
    $('.nav-link').each(function(){
      var linkUrl = $(this).attr('href');

      // Check if the current URL matches the navigation item's URL
      if(currentUrl == linkUrl){
        $(this).addClass('active'); // Add the 'active' class to the matching item 
        $(this).find('i').addClass('nav-icon'); // Add the 'nav-icon' class to the icon inside the matching item 
        $(this).parents('.nav-item').addClass('menu-open').addClass('active'); // Optional: Expand the parent menu item and add 'active' class
      }
    });
  });
  </script>





