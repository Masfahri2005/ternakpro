@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Detail Hewan</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('daftar.index') }}">Daftar Hewan</a></li>
            <li class="breadcrumb-item active">Detail Hewan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
          <div class="animal-card">
            <div class="animal-card-img">
              @if($data_hewan->foto)
                <img src="{{ asset('storage/foto_hewan/' . basename($data_hewan->foto)) }}" alt="Foto" class="img-fluid">
              @else
                <p>Tidak Ada Foto</p>
              @endif
            </div>
            <div class="animal-card-body">
              <h5 class="animal-card-title">{{ $data_hewan->jenis }}</h5>
              <ul class="list-unstyled">
                <li><strong>Kategori:</strong> {{ $data_hewan->kategori }}</li>
                <li><strong>Usia:</strong> {{ $data_hewan->usia }} tahun</li>
                <li><strong>Level:</strong> {{ $data_hewan->level }}</li>
                <li><strong>Berat:</strong> {{ $data_hewan->berat }} kg</li>
                <li><strong>Kondisi Fisik:</strong> {{ $data_hewan->kondisi_fisik }}</li>
                <li><strong>Harga:</strong> Rp{{ number_format($data_hewan->harga, 0, ',', '.') }}</li>
                <li><strong>Status:</strong> {{ $data_hewan->status }}</li>
              </ul>
            </div>
            <div class="animal-card-footer">
              <div class="btn-group">
                <a href="{{ route('daftar.index') }}" class="btn btn-secondary">
                  <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="{{ route('daftar.edit', $data_hewan->id) }}" class="btn btn-warning">
                  <i class="fas fa-edit"></i> Edit
                </a>
              </div>
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

<style>
  .animal-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    background-color: #fff;
    margin-bottom: 20px;
  }
  .animal-card-img {
    overflow: hidden;
  }
  .animal-card-img img {
    width: 100%;
    height: auto; /* Ensure the image scales proportionally */
    object-fit: contain; /* Ensure the image fits within the container without being cut off */
  }
  .animal-card-body {
    padding: 20px;
  }
  .animal-card-footer {
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #ddd;
    background-color: #f8f9fa;
  }
  .animal-card-title {
    margin: 0 0 15px;
    font-size: 1.5em;
    font-weight: bold;
    color: #333;
  }
  .list-unstyled li {
    margin-bottom: 10px;
    list-style-type: disc;
    margin-left: 20px;
  }
  .btn {
    margin: 0 5px;
  }
  .btn-group {
    display: flex;
    gap: 5px;
  }
  .breadcrumb {
    background-color: transparent;
    padding: 0;
  }

  @media (max-width: 768px) {
    .animal-card {
      margin-bottom: 15px;
    }
    .animal-card-body, .animal-card-footer {
      padding: 15px;
    }
    .animal-card-title {
      font-size: 1.2em;
    }
  }
</style>
