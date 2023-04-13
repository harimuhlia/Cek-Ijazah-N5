<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Counter - Coming Soon Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>SIVIL</b> NELKATA</h1>
                <h4 data-animated="GoIn">Sistem Verifikasi Ijazah Elektronik SMK Negeri 5 Kabupaten Tangerang</h4>
            </header>
            <span>
              <p>Untuk memastikan keabsahan ijazah anda, pastikan nomor ijazah anda dapat diverifikasi melalui SIVIL.
                Pastikan anda mengisi Nama Jurusan, Nomor NISN dan Nomor Ijazah dengan benar.
                Apabila nomor ijazah anda tidak terdaftar, silakan hubungi Kesiswaan untuk memastikan data anda telah diinput dengan benar.
                Pendataan SIVIL Ijazah ini resmi diterbitkan dari T.P 2022-2023, bagi lulusan dibawah tahun tersebut apabila tidak ditemukan di SIVIL silakan hubungi Kesiswaan atau datang langsung ke Sekolah.<p/>
            </span>
            <div class="col-lg-4 col-lg-offset-4 mt centered">
            	<h4>FORMULIR VERIFIKASI IJAZAH</h4>           
          <div class="card">
              <div class="card-body">
                  <form action="" method="get">
                      @csrf
                      <input type="hidden" name="search" value="search">
                      <div class="form-group">
                          <label for="">Jurusan</label>
                          <select name="jurusan" id="" class="form-control">
                              <option value="">Pilih Jurusan</option>
                              <option value="Tata Boga">Tata Boga</option>
                              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                              <option value="Multimedia">Multimedia</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="">NISN</label>
                          <input type="number" name="NISN" id="" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="">Nomor Ijazah</label>
                          <input type="text" name="no_ijazah" id="" class="form-control">
                      </div>
                      <div class="form-group">
                          <button class="btn btn-primary">Cari Data</button>
                      </div>
                  </form>
              </div>
          </div>
  
          @isset($search)
          @if (empty($search))
              <h1>Data yang anda masukan tidak valid</h1>
          @else
          <div class="card">
              <div class="card-header">
                  Data Siswa
              </div>
              <div class="card-body">
                  <table class="table">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>NISN</th>
                            <th>Jurusan(s)</th>
                            <th>TTL</th>
                            <th>Nama Wali</th>
                            <th>No. Ijazah</th>
                            <th>Asal Sekolah</th>
                          </tr>
                      </thead>
                      <tbody>
                          @forelse ($searchsiswa as $item)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->namalengkap }}</td>
                                <td>{{ $item->NISN }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->tempatlahir }}, {{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->wali }}</td>
                                <td>{{ $item->no_ijazah }}</td>
                                <td>{{ $item->asalsekolah }}</td>
                              </tr>
                          @empty
                              <tr>
                                  <th>Data Tidak Ada</th>
                              </tr>
                          @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
          @endif 
        @endisset
			</div>  
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            {{-- <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/1.jpg">
                <img src="assets/img/slider/1.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/2.jpg">
                <img src="assets/img/slider/2.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/3.jpg">
                <img src="assets/img/slider/3.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/4.jpg">
                <img src="assets/img/slider/4.jpg">
              </li>
            </ul> --}}
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>