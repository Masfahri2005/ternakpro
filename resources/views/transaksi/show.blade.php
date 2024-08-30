@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Detail Transaksi</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('transaksi.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Detail Transaksi</li>
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

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Detail Transaksi</h5>
            </div>
            <div class="card-body">
              <p><strong>Nama Lengkap :</strong> {{ $transaksi->nama_lengkap }}</p>
              <p><strong>Nomor Telepon :</strong> {{ $transaksi->no_tlp }}</p>
              <p><strong>Email :</strong> {{ $transaksi->email }}</p>
              <p><strong>Alamat :</strong> {{ $transaksi->alamat }}</p>
              <p><strong>Jenis Hewan :</strong> {{ $transaksi->daftar->jenis }}</p>
              <p><strong>Harga :</strong> {{ $transaksi->daftar->harga }}</p>
              <p><strong>Metode Pembayaran :</strong> {{ $transaksi->metode_pembayaran }}</p>
              <p><strong>Status Pembayaran :</strong> {{ $transaksi->status_pembayaran }}</p>
              <p><strong>Tanggal Transaksi :</strong> {{ $transaksi->tanggal_transaksi }}</p>
              <p><strong>Bukti Pembayaran :</strong> 
                @if($transaksi->bukti_pembayaran)
                  <a href="{{ asset('uploads/' . $transaksi->bukti_pembayaran) }}" target="_blank">Lihat Bukti Pembayaran</a>
                @else
                  Tidak ada bukti pembayaran
                @endif
              </p>
              <p><strong>Catatan Tambahan :</strong> {{ $transaksi->catatan_tambahan }}</p>
            </div>
            <div class="card-footer">
              <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
              </a>
             
              <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
              </a> 
              <a href="{{ route('transaksi.download', $transaksi->id) }}" class="btn btn-success">
                <i class="fas fa-download"></i> Download Invoice
              </a>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
