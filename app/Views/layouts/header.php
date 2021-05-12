<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/adminlte.css'); ?>" type="text/css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- iconify icons -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- select 2 form -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" />
   <!-- tailwind css -->
    <link href="<?php echo base_url('assets/css/app.css'); ?>" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>" />
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>" />

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>" />
  <!-- daterange picker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>" />
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>" />
  <!-- Select2 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>" />
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'); ?>" />
  <!-- BS Stepper -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bs-stepper/css/bs-stepper.min.css'); ?>" />
  <!-- dropzonejs -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/dropzone/min/dropzone.min.css'); ?>" />
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>" />

   <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.4/dist/js/adminlte.min.js"></script>
  <!-- Preload Scriptt -->
<title>Register</title>
</head>
<body>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url();?>/dashboard" class="navbar-brand">
        <span class="brand-text font-weight-light">User Management</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item">
            <a href="/home" class="nav-link">Home</a>
          </li>
        </ul>

      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Drop-down Menu -->
        <!-- Notifications Drop-down Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
           <i class="iconify" data-icon="codicon:account" data-inline="false"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">ACTION</span>
            <div class="dropdown-divider"></div>
             <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a href="route('logout" class="dropdown-item dropdown-footer" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}</a>
                              </form>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Name</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <!-- start of the thin i want -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="iconify" data-icon="maki-school-11" data-inline="false"></i>
              <p>
                Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/users" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/register" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="iconify" data-icon="maki-school-11" data-inline="false"></i>
              <p>
                Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>/manage-roles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/create-roles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>/assign-roles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Roles</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- end of the thin i want -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
  