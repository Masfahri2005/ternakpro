@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Transaksi</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/transaksi' }}">Home</a></li>
            <li class="breadcrumb-item active">Transaksi Beli</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      {{-- Menampilkan Flash Message --}}
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      
      {{-- Buka isi konten --}}
      <div class="row">
        @foreach ($data_transaksi as $transaksi)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $transaksi->nama_lengkap }}</h5>
            </div>
            <div class="card-body">
              <p><strong>Alamat :</strong> {{ $transaksi->alamat }}</p>
              <p><strong>Jenis Hewan :</strong> {{ $transaksi->daftar->jenis }}</p>
              <p><strong>Harga :</strong> Rp {{ number_format($transaksi->daftar->harga, 0, ',', '.') }}</p>
              <p><strong>Metode Pembayaran :</strong> {{ $transaksi->metode_pembayaran }}</p>
              <p><strong>Status Pembayaran :</strong> {{ $transaksi->status_pembayaran }}</p>
              <p><strong>Tanggal Transaksi :</strong> {{ $transaksi->tanggal_transaksi }}</p>
              @if(Auth::user()->role == 'administrator')
              <p><strong>Bukti Pembayaran :</strong> 
                @if($transaksi->bukti_pembayaran) 
                  <a href="{{ asset('uploads/' . $transaksi->bukti_pembayaran) }}" target="_blank">Lihat Bukti Pembayaran</a>
                @else
                  Tidak ada bukti pembayaran
                @endif
              </p>
              @endif
              <p><strong>Catatan Tambahan :</strong> {{ $transaksi->catatan_tambahan }}</p>
            </div>
            <div class="card-footer d-flex justify-content-center">
              @if(Auth::user()->role == 'administrator')
              <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-success btn-sm mx-1">
                <i class="fas fa-eye"></i>
              </a> 
              <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm mx-1">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline;" class="delete-form mx-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
              @endif
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
