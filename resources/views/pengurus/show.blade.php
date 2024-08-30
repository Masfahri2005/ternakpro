@include('layouts.header')
@include('layouts.sidebar')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Detail Pengurus</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('pengurus.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Detail Pengurus</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-dark text-white">
          <h3 class="card-title font-weight-bold mb-0">Informasi Lengkap Pengurus</h3>
        </div>
        <div class="card-body">
          <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-4 text-center">
              <div class="rounded-circle overflow-hidden mx-auto" style="width: 150px; height: 150px;">
                <img src="{{ Storage::url($pengurus->foto) }}" alt="{{ $pengurus->nama_lengkap }}" class="img-fluid">
              </div>
              <h4 class="mt-3">{{ $pengurus->nama_lengkap }}</h4>
              <p class="text-muted">{{ $pengurus->role }}</p>
            </div>
            <!-- Information Section -->
            <div class="col-md-8">
              <div class="table-responsive">
                <table class="table table-borderless table-sm">
                  <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $pengurus->nama_lengkap }}</td>
                  </tr>
                  <tr>
                    <th>Usia</th>
                    <td>{{ $pengurus->usia }}</td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $pengurus->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>{{ $pengurus->alamat }}</td>
                  </tr>
                  <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $pengurus->no_tlp }}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{ $pengurus->email }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-left">
          <a href="{{ route('pengurus.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
    </div>
  </div>

</div>

@include('layouts.footer')