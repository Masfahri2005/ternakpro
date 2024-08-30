@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0"> Data Hewan TernakPro</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('daftar.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Hewan</li>
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
          <h3 class="card-title">Form Tambah Data Hewan</h3>
        </div>
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jenis">Jenis</label>
                  <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan jenis hewan">
                  @error('jenis')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file @error('foto') is-invalid @enderror" id="foto" name="foto">
                  @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="usia">Usia</label>
                  <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" name="usia" value="{{ old('usia') }}" placeholder="Masukkan usia hewan">
                  @error('usia')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{ old('kategori') }}" placeholder="Masukkan kategori hewan">
                  @error('kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="level">Level</label>
                  <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{ old('level') }}" placeholder="Masukkan level hewan">
                  @error('level')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="berat">Berat</label>
                  <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" value="{{ old('berat') }}" placeholder="Masukkan berat hewan">
                  @error('berat')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="kondisi_fisik">Kondisi Fisik</label>
                  <input type="text" class="form-control @error('kondisi_fisik') is-invalid @enderror" id="kondisi_fisik" name="kondisi_fisik" value="{{ old('kondisi_fisik') }}" placeholder="Masukkan kondisi fisik hewan">
                  @error('kondisi_fisik')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Masukkan harga hewan">
                  @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}" placeholder="Masukkan status hewan">
                  @error('status')
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
      {{-- tutup isi konten --}}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
