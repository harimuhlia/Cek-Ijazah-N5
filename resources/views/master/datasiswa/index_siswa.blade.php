@extends('tampilan.apputama')
@section('title', 'Data Ijazah Lengkap')

@section('content')
<section class="content">
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
      <p>{{ $message }}</p>
  </div>
  @endif
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Seluruh Data Siswa</h3>
              <div class="card-tools">
                <a href="" class="btn btn-success btn-sm"><i class="fas fa-upload" title="Tambah Data"></i> Import</a>
                <a href="{{ route('datasiswa.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" title="Tambah Data"></i> Tambah</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>NISN</th>
                  <th>Jurusan(s)</th>
                  <th>TTL</th>
                  <th>Nama Wali</th>
                  <th>No. Ijazah</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody> 
                  @foreach ($datasiswa as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namalengkap }}</td>
                    <td>{{ $item->NISN }}</td>
                    <td>{{ $item->jrsn->nama_jurusan }}</td>
                    <td>{{ $item->tempatlahir }}, {{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->wali }}</td>
                    <td>{{ $item->no_ijazah }}</td>
                    <td>
                      {{-- <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                      <a href="{{ route('datasiswa.edit',$item->id) }}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a> --}}
                      <form action="{{ route('datasiswa.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="#" class="btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('datasiswa.edit',$item->id) }}" class="btn btn-warning btn-xs"><i class="fas fa-edit"></i></a>
                        @if (Auth()->user()->role == 'Administrator')
                        <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete the record {{ $item->namalengkap }} ?')"><i class="fas fa-trash-alt"></i></button>
                        @endif
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>NISN</th>
                    <th>Jurusan(s)</th>
                    <th>TTL</th>
                    <th>Nama Wali</th>
                    <th>No. Ijazah</th>
                    <th>Edit</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection

@section('javascript')
        <script>
          $(function () {
            $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>
@endsection