@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Pemasok/Investor</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('investor.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Investor atau Pemasok</li>
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
      <div class="table-responsive">
        <table class="table table-hover text-center table-bordered table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Investor/Pemasok</th>
              <th scope="col">Nama Usaha</th>
              <th scope="col">Tipe Entitas</th>
              <th scope="col">Status</th>
              <th scope="col">Nominal Investasi</th>
              @if(Auth::user()->role == 'administrator')
              <th scope="col">Aksi</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach ($data_investor as $investor)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $investor->nama_investor }}</td>
              <td>{{ $investor->nama_perusahaan }}</td>
              <td>{{ $investor->tipe_entitas }}</td>
              <td>{{ $investor->status }}</td>
              <td>Rp. {{ number_format($investor->nominal_investasi, 0, ',', '.') }}</td>
              @if(Auth::user()->role == 'administrator')
              <td>
                <a href="{{ route('investor.show', $investor->id) }}" class="btn btn-success btn-sm">
                  <i class="fas fa-eye"></i>
                </a> 
                <a href="{{ route('investor.edit', $investor->id) }}" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('investor.destroy', $investor->id) }}" method="POST" style="display:inline;" class="delete-form">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- tutup isi konten --}}
      
    </div><!-- /.container-fluid -->
    <!-- Form tambah Feedback -->
    <div class="text mt-3">
        <a href="{{ route('investor.create') }}" class="btn btn-primary">
          <i class="fas fa-paw"></i> Form Pendataan Investor
        </a>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')

<style>
  .table td, .table th {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
