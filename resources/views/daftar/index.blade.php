@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0  ">Daftar Hewan TernakPro</h4>
          @if(Auth::user()->role == 'administrator')
          <div class="mt-3">
            <a href="{{ route('daftar.create') }}" class="btn btn-primary">
              <i class="fas fa-paw"></i> Tambah Data Hewan
            </a>
          </div>
          @endif
          <p class="mt-2">Pilihlah hewan ternak kambing dan domba sesuai kebutuhan Anda!</p>
          <p class="mt-2">Anda juga bisa mengklik tombol ikon checkout atau foto hewan ternak yang Anda pilih untuk langsung beralih ke halaman form pembayaran.</p>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/awal' }}">Home</a></li>
            <li class="breadcrumb-item active">Daftar Hewan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      {{-- Notifikasi --}}
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

      {{-- Buka isi konten --}}
      <div class="row">
        @foreach ($data_daftar as $daftar)
          <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow-sm border-0 rounded">
              <a href="{{ route('transaksi.create', $daftar->id) }}" class="animal-card-img mb-2 d-flex justify-content-center align-items-center">
                @if($daftar->foto)
                  <img src="{{ asset('storage/foto_hewan/' . basename($daftar->foto)) }}" alt="Foto" class="img-fluid">
                @else
                  <p class="text-center mb-0">Tidak Ada Foto</p>
                @endif
              </a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">{{ $daftar->jenis }}</h5>
                <br>
                <br>
                <p class="mb-1"><strong>Kategori:</strong> {{ $daftar->kategori }}</p>
                <p class="mb-1"><strong>Usia:</strong> {{ $daftar->usia }}</p>
                <p class="mb-1"><strong>Level:</strong> {{ $daftar->level }}</p>
                <p class="mb-1"><strong>Berat:</strong> {{ $daftar->berat }}</p>
                <p class="mb-1"><strong>Kondisi Fisik:</strong> {{ $daftar->kondisi_fisik }}</p>
                <p class="mb-1"><strong>Harga:</strong> Rp{{ number_format($daftar->harga, 0, ',', '.') }}</p>
                <p class="mb-1"><strong>Status:</strong> {{ $daftar->status }}</p>
              </div>
              <div class="card-footer d-flex justify-content-center align-items-center border-top-0 bg-light">
                @if(Auth::user()->role == 'administrator')
                <a href="{{ route('daftar.show', $daftar->id) }}" class="btn btn-success btn-sm mx-1">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('daftar.edit', $daftar->id) }}" class="btn btn-warning btn-sm mx-1">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST" style="display:inline;" class="delete-form mx-1">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
                @endif
                <a href="{{ route('transaksi.create', $daftar->id) }}" class="btn btn-primary btn-sm mx-1">
                  <i class="fas fa-shopping-cart"></i>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{-- tutup isi konten --}}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')

<style>
  .card {
    border-radius: 0.5rem;
    display: flex;
    flex-direction: column;
    height: 100%;
    border: none;
  }
  .animal-card-img {
    height: 200px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fa;
    border-radius: 0.5rem;
    text-decoration: none;
  }
  .animal-card-img img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
    border-radius: 0.5rem;
  }
  .card-footer {
    border-top: 1px solid #e9ecef;
    background-color: #f8f9fa;
    padding: 1rem;
  }
  .btn-sm {
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 0.2rem;
  }
  .card-body {
    padding: 1.25rem;
  }
  .delete-form {
    display: inline;
  }
  .breadcrumb-item a {
    color: #007bff;
  }
  .breadcrumb-item a:hover {
    text-decoration: underline;
  }
  .alert-dismissible .close {
    padding: 0.75rem;
  }
</style>

<script>
  function confirmDelete() {
    return confirm('Apakah Anda yakin ingin menghapus data ini?');
  }
</script>
