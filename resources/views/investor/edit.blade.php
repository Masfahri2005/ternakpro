@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Edit Data Investor</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('investor.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Edit data Investor</li>
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
        <div class="card-header bg-primary text-white">
          <h3 class="card-title">Form Edit Pendataan Investor/Pemasok</h3>
        </div>
        <form action="{{ route('investor.update', $investor->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_investor">Nama Investor</label>
                <input id="nama_investor" name="nama_investor" type="text" class="form-control" placeholder="Masukkan nama investor" value="{{ old('nama_investor', $investor->nama_investor) }}" required>
                <small class="form-text text-muted">Contoh: PT. XYZ</small>
              </div>
              <div class="form-group col-md-6">
                <label for="no_tlp">Nomor Telepon</label>
                <input id="no_tlp" name="no_tlp" type="text" class="form-control" placeholder="Masukkan nomor telepon" value="{{ old('no_tlp', $investor->no_tlp) }}" required>
                <small class="form-text text-muted">Contoh: 08123456789</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan email" value="{{ old('email', $investor->email) }}" required>
                <small class="form-text text-muted">Contoh: investor@example.com</small>
              </div>
              <div class="form-group col-md-6">
                <label for="no_wa">Nomor WhatsApp</label>
                <input id="no_wa" name="no_wa" type="text" class="form-control" placeholder="Masukkan nomor WhatsApp" value="{{ old('no_wa', $investor->no_wa) }}" required>
                <small class="form-text text-muted">Contoh: 08123456789</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input id="nama_perusahaan" name="nama_perusahaan" type="text" class="form-control" placeholder="Masukkan nama perusahaan" value="{{ old('nama_perusahaan', $investor->nama_perusahaan) }}" required>
                <small class="form-text text-muted">Contoh: ABC Corp</small>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                <input id="alamat_perusahaan" name="alamat_perusahaan" type="text" class="form-control" placeholder="Masukkan alamat perusahaan" value="{{ old('alamat_perusahaan', $investor->alamat_perusahaan) }}" required>
                <small class="form-text text-muted">Contoh: Jl. Contoh No. 123</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="kota">Kota</label>
                <input id="kota" name="kota" type="text" class="form-control" placeholder="Masukkan kota" value="{{ old('kota', $investor->kota) }}" required>
                <small class="form-text text-muted">Contoh: Jakarta</small>
              </div>
              <div class="form-group col-md-4">
                <label for="provinsi">Provinsi</label>
                <input id="provinsi" name="provinsi" type="text" class="form-control" placeholder="Masukkan provinsi" value="{{ old('provinsi', $investor->provinsi) }}" required>
                <small class="form-text text-muted">Contoh: DKI Jakarta</small>
              </div>
              <div class="form-group col-md-4">
                <label for="kode_pos">Kode Pos</label>
                <input id="kode_pos" name="kode_pos" type="text" class="form-control" placeholder="Masukkan kode pos" value="{{ old('kode_pos', $investor->kode_pos) }}" required>
                <small class="form-text text-muted">Contoh: 12345</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="negara">Negara</label>
                <input id="negara" name="negara" type="text" class="form-control" placeholder="Masukkan negara" value="{{ old('negara', $investor->negara) }}" required>
                <small class="form-text text-muted">Contoh: Indonesia</small>
              </div>
              <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input id="website" name="website" type="url" class="form-control" placeholder="Masukkan URL website/Sosial Media Usaha" value="{{ old('website', $investor->website) }}">
                <small class="form-text text-muted">Contoh: http://www.perusahaan.com</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tipe_entitas">Tipe Entitas</label>
                <input id="tipe_entitas" name="tipe_entitas" type="text" class="form-control" placeholder="Masukkan tipe entitas" value="{{ old('tipe_entitas', $investor->tipe_entitas) }}" required>
                <small class="form-text text-muted">Contoh: Individu, Perusahaan</small>
              </div>
              <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input id="status" name="status" type="text" class="form-control" placeholder="Masukkan status" value="{{ old('status', $investor->status) }}" required>
                <small class="form-text text-muted">Contoh: Aktif, Non-Aktif</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nominal_investasi">Nominal Investasi</label>
                <input id="nominal_investasi" name="nominal_investasi" type="number" step="0.01" class="form-control" placeholder="Masukkan nominal investasi" value="{{ old('nominal_investasi', $investor->nominal_investasi) }}" required>
                <small class="form-text text-muted">Contoh: 1000000</small>
              </div>
              <div class="form-group col-md-6">
                <label for="bukti_investasi">Bukti Investasi (PDF, JPG, JPEG, PNG)</label>
                <input id="bukti_investasi" name="bukti_investasi" type="file" class="form-control">
                @if($investor->bukti_investasi)
                <img src="{{ Storage::url('bukti_investasi/' . $investor->bukti_investasi) }}" alt="Bukti Investasi" width="100">
                @endif
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('investor.index') }}" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
      {{-- Tutup isi konten --}}
    </div><!-- /.container -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
