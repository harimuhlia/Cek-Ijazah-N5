@extends('tampilan.apputama')
@section('title', 'Tambah Siswa')

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
    <h3 class="card-title">Formulir Tambah Data Siswa</h3>
    </div>
    <form>
    <div class="card-body">
      <div class="form-group">
        <label for="namalengkap">Nama Lengkap</label>
        <input type="text" class="form-control" id="namalengkap" placeholder="Masukan Nama Lengkap">
        </div>
        <div class="form-group">
        <label for="NISN">NISN</label>
        <input type="text" class="form-control" id="NISN" placeholder="Silakan Masukan NISN">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan">
          </div>
        <div class="form-group">
          <label for="tempatlahir">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempatlahir" placeholder="Masukan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Pilih Tanggal">
            </div>
    <div class="form-group">
    <label for="wali">Nama Wali</label>
    <input type="text" class="form-control" id="wali" placeholder="Masukan Nama Wali">
    </div>
    <div class="form-group">
    <label for="thn_masuk">Tahun Masuk</label>
    <input type="date" class="form-control" id="thn_masuk" placeholder="Masukan Tahun Masuk">
    </div>
    <div class="form-group">
      <label for="thn_lulus">Tahun Lulus</label>
      <input type="date" class="form-control" id="thn_lulus" placeholder="Masukan Tahun Lulus">
      </div>
    <div class="form-group">
      <label for="no_ijazah">Nomor Ijazah</label>
      <input type="text" class="form-control" id="no_ijazah" placeholder="Masukan Nomor Ijazah">
      </div>
      <div class="form-group">
        <label for="asalsekolah">Asal Sekolah</label>
        <input type="text" class="form-control" id="asalsekolah" placeholder="Masukan Asal Sekolah">
        </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
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