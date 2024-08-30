@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Pemantauan Hewan TernakPro</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/awal' }}">Home</a></li>
            <li class="breadcrumb-item active">Pemantauan Hewan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      {{-- Buka isi konten --}}
      <div class="table-responsive">
        <table class="table table-hover text-center table-bordered table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pemilik</th>
              <th scope="col">Jenis Hewan</th>
              <th scope="col">Catatan</th>
              <th scope="col">Status Kesehatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data_hewan as $hewan)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $hewan->nama_pemilik }}</td>
              <td>{{ $hewan->jenis_hewan }}</td>
              <td>{{ $hewan->catatan }}</td>
              <td>{{ $hewan->status_kesehatan }}</td>
              <td>
                <a href="{{ route('hewan.show', $hewan->id) }}" class="btn btn-success btn-sm">
                  <i class="fas fa-eye"></i>
                </a> 
                @if(Auth::user()->role == 'administrator')
                <a href="{{ route('hewan.edit', $hewan->id) }}" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('hewan.destroy', $hewan->id) }}" method="POST" style="display:inline;" class="delete-form">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- tutup isi konten --}}
      <!-- Form tambah Feedback -->
      @if(Auth::user()->role == 'administrator')
      <div class="text mt-3">
        <a href="{{ route('hewan.create') }}" class="btn btn-primary">
          <i class="fas fa-paw"></i> Tambah Data Pemantauan
        </a>
      </div>
      @endif
    </div><!-- /.container-fluid -->
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
