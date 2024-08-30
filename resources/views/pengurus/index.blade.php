@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Data Pengurus</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ '/awal' }}">Home</a></li>
            <li class="breadcrumb-item active">pengurus</li>
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
              <th scope="col">Foto</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Usia</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data_pengurus as $pengurus)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>
                <img src="{{ Storage::url($pengurus->foto) }}" alt="{{ $pengurus->nama_lengkap }}" style="width: 75px; height: 100px; border-radius: 8px;">
              </td>
              <td>{{ $pengurus->nama_lengkap }}</td>
              <td>{{ $pengurus->usia }}</td>
              <td>{{ $pengurus->jk }}</td>
              <td>{{ $pengurus->role }}</td>
              <td>
                <a href="{{ route('pengurus.show', $pengurus->id) }}" class="btn btn-success btn-sm">
                  <i class="fas fa-eye"></i>
                </a> 
                <a href="{{ route('pengurus.edit', $pengurus->id) }}" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('pengurus.destroy', $pengurus->id) }}" method="POST" style="display:inline;" class="delete-form">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- tutup isi konten --}}

      <!-- Button trigger modal -->
      <div class="text mt-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPengurusModal">
          <i class="fas fa-plus"></i> Tambah Data Pengurus
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="tambahPengurusModal" tabindex="-1" aria-labelledby="tambahPengurusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahPengurusModalLabel">Tambah Data Pengurus</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="usia">Usia</label>
                  <input type="number" name="usia" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select name="jk" id="jk" class="form-control">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                  </select>
                </div>  
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label for="no_tlp">Nomor Telepon</label>
                  <input type="text" name="no_tlp" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="role">Jabatan</label>
                  <input type="text" name="role" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control-file">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
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
  .table td, .table th {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
