@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Form Transaksi </h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('transaksi.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Tambah Transaksi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      {{-- Buka isi konten --}}
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Transaksi Beli Hewan</h3>
        </div>
        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <!-- Fields -->
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan nama lengkap">
                  @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="no_tlp">Nomor Telepon</label>
                  <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}" placeholder="Masukkan nomor telepon">
                  @error('no_tlp')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email">
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat">
                  @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="id_daftar">Jenis Hewan</label>
                    <select id="id_daftar" name="id_daftar" class="custom-select">
                        @foreach ($data_daftar as $daftar)z
                            <option value="{{ $daftar->id }}" data-harga="{{ $daftar->harga }}">{{ $daftar->jenis }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Masukkan harga" readonly>
                  @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <!-- Fields -->
                <div class="form-group">
                  <label for="metode_pembayaran">Metode Pembayaran</label>
                  <select id="metode_pembayaran" name="metode_pembayaran" class="custom-select">
                    <option value="Transfer via Bank">Transfer via Bank</option>
                    <option value="Cash On Delivery">Cash On Delivery</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="status_pembayaran">Status Pembayaran</label>
                  <select id="status_pembayaran" name="status_pembayaran" class="custom-select">
                    @if(Auth::user()->role == 'administrator')
                    <option value="SUDAH LUNAS">SUDAH LUNAS</option>
                    @endif
                    <option value="BELUM LUNAS">BELUM LUNAS</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="tanggal_transaksi">Tanggal Transaksi</label>
                  <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}">
                  @error('tanggal_transaksi')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="bukti_pembayaran">Bukti Pembayaran</label>
                  <input type="file" class="form-control @error('bukti_pembayaran') is-invalid @enderror" id="bukti_pembayaran" name="bukti_pembayaran">
                  @error('bukti_pembayaran')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="catatan_tambahan">Catatan Tambahan</label>
                  <input type="text" class="form-control @error('catatan_tambahan') is-invalid @enderror" id="catatan_tambahan" name="catatan_tambahan" value="{{ old('catatan_tambahan') }}" placeholder="Masukkan catatan tambahan">
                  @error('catatan_tambahan')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
      {{-- Tutup isi konten --}}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')

<!-- Scripts -->
<script>
  document.getElementById('id_daftar').addEventListener('change', function () {
    var selectedOption = this.options[this.selectedIndex];
    var harga = selectedOption.getAttribute('data-harga');
    document.getElementById('harga').value = harga;
  });
</script>