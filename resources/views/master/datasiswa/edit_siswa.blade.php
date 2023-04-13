@extends('tampilan.apputama')
@section('title', 'Edit Data Siswa')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>@yield('title')</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Formulir Edit Data Siswa</h3>
    </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form action="/datasiswa/{{ $id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="namalengkap">Nama Lengkap</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="namalengkap" value="{{ $datasiswa->namalengkap }}" placeholder="Masukkan Judul Post">
        </div>
        <div class="form-group">
        <label for="NISN">NISN</label>
        <input type="text" class="form-control" name="NISN" value="{{ $datasiswa->NISN }}">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" name="jurusan" value="">
          </div>
        <div class="form-group">
          <label for="tempatlahir">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempatlahir" value="">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="">
            </div>
    <div class="form-group">
    <label for="wali">Nama Wali</label>
    <input type="text" class="form-control" name="wali" value="">
    </div>
    <div class="form-group">
    <label for="thn_masuk">Tahun Masuk</label>
    <input type="date" class="form-control" name="thn_masuk" value="">
    </div>
    <div class="form-group">
      <label for="thn_lulus">Tahun Lulus</label>
      <input type="date" class="form-control" name="thn_lulus" value="">
      </div>
    <div class="form-group">
      <label for="no_ijazah">Nomor Ijazah</label>
      <input type="text" class="form-control" name="no_ijazah" value="">
      </div>
      <div class="form-group">
        <label for="asalsekolah">Asal Sekolah</label>
        <input type="text" class="form-control" name="asalsekolah" value="">
        </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-success" href="{{ route('datasiswa.index')}}">Kembali</a>
    </div>
    </form>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
@endsection