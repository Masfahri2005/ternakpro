@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 align-items-center">
        <div class="col-sm-6">
          <h4 class="m-0">Detail Investor/Pemasok</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('investor.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Detail Investor/Pemasok</li>
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
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Informasi Investor/Pemasok</h5>
        </div>
        <div class="card-body">
          <dl class="row mb-0">
            <dt class="col-sm-3 text-truncate">Nama Investor/Pemasok</dt>
            <dd class="col-sm-9">{{ $investor->nama_investor }}</dd>

            <dt class="col-sm-3 text-truncate">Nomor Telepon</dt>
            <dd class="col-sm-9">{{ $investor->no_tlp }}</dd>

            <dt class="col-sm-3 text-truncate">Email</dt>
            <dd class="col-sm-9">{{ $investor->email }}</dd>

            <dt class="col-sm-3 text-truncate">Nomor WhatsApp</dt>
            <dd class="col-sm-9">{{ $investor->no_wa }}</dd>

            <dt class="col-sm-3 text-truncate">Nama Usaha</dt>
            <dd class="col-sm-9">{{ $investor->nama_perusahaan }}</dd>

            <dt class="col-sm-3 text-truncate">Alamat Usaha</dt>
            <dd class="col-sm-9">{{ $investor->alamat_perusahaan }}</dd>

            <dt class="col-sm-3 text-truncate">Kota Usaha</dt>
            <dd class="col-sm-9">{{ $investor->kota }}</dd>

            <dt class="col-sm-3 text-truncate">Provinsi Usaha</dt>
            <dd class="col-sm-9">{{ $investor->provinsi }}</dd>

            <dt class="col-sm-3 text-truncate">Kode Pos</dt>
            <dd class="col-sm-9">{{ $investor->kode_pos }}</dd>

            <dt class="col-sm-3 text-truncate">Negara</dt>
            <dd class="col-sm-9">{{ $investor->negara }}</dd>

            <dt class="col-sm-3 text-truncate">Website</dt>
            <dd class="col-sm-9">
              @if (filter_var($investor->website, FILTER_VALIDATE_URL))
                <a href="{{ $investor->website }}" target="_blank">{{ $investor->website }}</a>
              @else
                <a href="http://{{ $investor->website }}" target="_blank">{{ $investor->website }}</a>
              @endif
            </dd>

            <dt class="col-sm-3 text-truncate">Tipe Entitas</dt>
            <dd class="col-sm-9">{{ $investor->tipe_entitas }}</dd>

            <dt class="col-sm-3 text-truncate">Status</dt>
            <dd class="col-sm-9">{{ $investor->status }}</dd>

            <dt class="col-sm-3 text-truncate">Nominal Investasi</dt>
            <dd class="col-sm-9">Rp. {{ number_format($investor->nominal_investasi, 0, ',', '.') }}</dd>

            <dt class="col-sm-3 text-truncate">Bukti Investasi</dt>
            <dd class="col-sm-9">
              @if ($investor->bukti_investasi)
                <a href="{{ asset('storage/bukti_investasi/' . $investor->bukti_investasi) }}" target="_blank" class="btn btn-link p-0">
                  <i class="fas fa-file-alt"></i> Lihat Bukti Investasi
                </a>
              @else
                Tidak Ada Bukti Investasi
              @endif
            </dd>
          </dl>
        </div>
        <div class="card-footer">
          <a href="{{ route('investor.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>
          <a href="{{ route('investor.edit', $investor->id) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Edit
          </a>
          <a href="{{ route('investor.download', $investor->id) }}" class="btn btn-success">
            <i class="fas fa-download"></i> Download Data
          </a>
        </div>
      </div>
      {{-- Tutup isi konten --}}
      
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')

<style>
  .content-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #e3e6f0;
    margin-bottom: 20px;
  }
  .card {
    border-radius: 10px;
  }
  .card-header {
    border-bottom: 1px solid #e3e6f0;
  }
  .card-footer {
    background-color: #f8f9fa;
    border-top: 1px solid #e3e6f0;
  }
  .breadcrumb-item a {
    color: #4e73df;
  }
  .breadcrumb-item.active {
    color: #6c757d;
  }
  dt {
    font-weight: bold;
  }
  dd {
    margin-bottom: 0.5rem;
  }
</style>
