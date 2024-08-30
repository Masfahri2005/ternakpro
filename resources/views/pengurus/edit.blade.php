@include('layouts.header')
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Edit Data Pengurus</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ '/awal' }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pengurus.index') }}">Pengurus</a></li>
                        <li class="breadcrumb-item active">Edit Pengurus</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{ $pengurus->nama_lengkap }}" required>
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" name="usia" class="form-control" value="{{ $pengurus->usia }}" required>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control">
                        <option value="L" {{ $pengurus->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $pengurus->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" required>{{ $pengurus->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_tlp">Nomor Telepon</label>
                    <input type="text" name="no_tlp" class="form-control" value="{{ $pengurus->no_tlp }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $pengurus->email }}" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="form-control" value="{{ $pengurus->role }}" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control-file">
                    <br>
                    @if ($pengurus->foto)
                        <img src="{{ Storage::url($pengurus->foto) }}" alt="{{ $pengurus->nama_lengkap }}" style="width: 100px; height: auto;">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('pengurus.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('layouts.footer')
