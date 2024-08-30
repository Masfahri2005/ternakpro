<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ '/awal' }}" class="brand-link" style="border-bottom: none;">
    <h4 class="brand-text font-weight-bold" style="font-family: 'Arial', sans-serif; color: #ffffff; padding-left: 15px;">
      TernakPro
    </h4>
  </a>
  <br>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Menu Utama -->
        <li class="nav-item">
          <a href="{{ '/home' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-home"></i>
            <p>Dasboard</p>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ '/akun' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-users"></i>
            <p>Akun User</p>
          </a>
        </li> --}}
        <li class="nav-item">
          <a href="{{ '/hewan' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-paw"></i>
            <p>Pemantauan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ '/daftar' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-list"></i>
            <p>Beli Hewan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ '/transaksi' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>Transaksi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ '/investor' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-users"></i>
            <p>Investor</p>
          </a>
        </li>

        <!-- Menu Administrator -->
        @if(Auth::user()->role == 'administrator')
        <li class="nav-item">
          <a href="{{ '/pengurus' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>Pengurus</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ '/users' }}" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#007bff'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-folder"></i>
            <p>Data Registrasi</p>
          </a>
        </li>
        @endif

        {{-- <!-- Logout Link -->
        <li class="nav-item">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            @method('POST')
          </form>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link" style="transition: background-color 0.3s ease, color 0.3s ease;" onmouseover="this.style.backgroundColor='#dc3545'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor=''; this.style.color='';">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
