@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0 font-weight-bold">Dasboard Backend</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/awal' }}">Home</a></li>
            <li class="breadcrumb-item active">Dasboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- User Info Box -->
      <div class="content-box bg-light p-3 rounded shadow-sm">
        <div class="user-panel d-flex align-items-center justify-content-between">
          <div class="user-info d-flex align-items-center">
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
            <div class="info ml-3">
              <h4 class="font-weight-bold text-dark mb-0">Selamat Datang</h4>
              <span class="text-primary">User : {{ Auth::user()->name }}</span>
            </div>
          </div>
          <div class="logout">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              @method('POST')
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-danger">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <h5 class="mb-0 font-weight-bold">Logout</h5>
            </a>
          </div>
        </div>
      </div>
      <!-- End of User Info Box -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
