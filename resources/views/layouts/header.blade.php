<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Backend - TernakPro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <!-- Link to external CSS file -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- Custom styles -->
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ '/awal' }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="image">
          @Auth
            <?php
              // Mengambil nama pengguna
              $userName = Auth::user()->name;

              // Membagi nama menjadi array kata
              $nameParts = explode(' ', $userName);

              // Mengambil huruf pertama dari setiap kata
              $initials = '';
              foreach ($nameParts as $part) {
                  $initials .= strtoupper($part[0]);
              }
            ?>
            <!-- Inisial User menjadi tautan ke halaman edit profil -->
            <a href="{{ route('profile.edit') }}" class="user-initial bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 24px; text-decoration: none;">
              {{ $initials }}
            </a>
          @endauth
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
