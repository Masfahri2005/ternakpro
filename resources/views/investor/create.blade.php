@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Form Pendataan Investor</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('investor.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Tambah Investor</li>
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
          <h3 class="card-title">Form Pendataan Investor/Pemasok</h3>
        </div>
        <form action="{{ route('investor.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_investor">Nama Investor</label>
                <input id="nama_investor" name="nama_investor" type="text" class="form-control" placeholder="Masukkan nama investor" required>
                <small class="form-text text-muted">Contoh: PT. XYZ</small>
              </div>
              <div class="form-group col-md-6">
                <label for="no_tlp">Nomor Telepon</label>
                <input id="no_tlp" name="no_tlp" type="text" class="form-control" placeholder="Masukkan nomor telepon" required>
                <small class="form-text text-muted">Contoh: 08123456789</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan email" required>
                <small class="form-text text-muted">Contoh: investor@example.com</small>
              </div>
              <div class="form-group col-md-6">
                <label for="no_wa">Nomor WhatsApp</label>
                <input id="no_wa" name="no_wa" type="text" class="form-control" placeholder="Masukkan nomor WhatsApp" required>
                <small class="form-text text-muted">Contoh: 08123456789</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input id="nama_perusahaan" name="nama_perusahaan" type="text" class="form-control" placeholder="Masukkan nama perusahaan" required>
                <small class="form-text text-muted">Contoh: ABC Corp</small>
              </div>
              <div class="form-group col-md-6">
                <label for="alamat_perusahaan">Alamat Perusahaan</label>
                <input id="alamat_perusahaan" name="alamat_perusahaan" type="text" class="form-control" placeholder="Masukkan alamat perusahaan" required>
                <small class="form-text text-muted">Contoh: Jl. Contoh No. 123</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="kota">Kota</label>
                <input id="kota" name="kota" type="text" class="form-control" placeholder="Masukkan kota" required>
                <small class="form-text text-muted">Contoh: Jakarta</small>
              </div>
              <div class="form-group col-md-4">
                <label for="provinsi">Provinsi</label>
                <input id="provinsi" name="provinsi" type="text" class="form-control" placeholder="Masukkan provinsi" required>
                <small class="form-text text-muted">Contoh: DKI Jakarta</small>
              </div>
              <div class="form-group col-md-4">
                <label for="kode_pos">Kode Pos</label>
                <input id="kode_pos" name="kode_pos" type="text" class="form-control" placeholder="Masukkan kode pos" required>
                <small class="form-text text-muted">Contoh: 12345</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="negara">Negara</label>
                <input id="negara" name="negara" type="text" class="form-control" placeholder="Masukkan negara" required>
                <small class="form-text text-muted">Contoh: Indonesia</small>
              </div>
              <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input id="website" name="website" type="url" class="form-control" placeholder="Masukkan URL website/Sosial Media Usaha">
                <small class="form-text text-muted">Contoh: http://www.example.com</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tipe_entitas">Tipe Entitas</label>
                <select id="tipe_entitas" name="tipe_entitas" class="form-control" required>
                    <option value="Pilih Salah Satu Opsi">-- Pilih Salah Satu Opsi --</option>
                    <option value="Investor">Investor</option>
                    <option value="Pemasok">Pemasok</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                  <option value="Pilih Salah Satu Opsi">-- Pilih Salah Satu Opsi --</option>
                  <option value="Active">Active</option>
                  <option value="Non Active">Non Active</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nominal_investasi">Nominal Investasi</label>
                <input id="nominal_investasi" name="nominal_investasi" type="number" class="form-control" placeholder="Masukkan nominal investasi" required>
                <small class="form-text text-muted">Contoh: 10000000</small>
              </div>
              <div class="form-group col-md-6">
                <label for="bukti_investasi">Bukti Investasi</label>
                <input id="bukti_investasi" name="bukti_investasi" type="file" class="form-control">
                <small class="form-text text-muted">Upload bukti investasi dalam format PDF atau gambar</small>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
