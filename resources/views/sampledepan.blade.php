<!-- /*
* Template Name: Tour
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="{{ asset('front') }}/fonts/icomoon/style.css">
	<link rel="stylesheet" href="{{ asset('front') }}/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/daterangepicker.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/aos.css">
	<link rel="stylesheet" href="{{ asset('front') }}/css/style.css">

	<title>Tour Free Bootstrap Template for Travel Agency by Untree.co</title>
</head>
<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="has-children">
						<a href="#">Dropdown</a>
						<ul class="dropdown">
							<li><a href="elements.html">Elements</a></li>
							<li><a href="#">Menu One</a></li>
							<li class="has-children">
								<a href="#">Menu Two</a>
								<ul class="dropdown">
									<li><a href="#">Sub Menu One</a></li>
									<li><a href="#">Sub Menu Two</a></li>
									<li><a href="#">Sub Menu Three</a></li>
								</ul>
							</li>
							<li><a href="#">Menu Three</a></li>
						</ul>
					</li>
					<li><a href="services.html">Services</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
			</div>
		</div>
	</nav>

	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5">
          <h1 class=""><span class="d-block">SIVIL NELKATA</span> </h1>
          <h5 class="d-block text-white">Sistem Verifikasi Ijazah Elektronik (SIVIL)</span> </h5>
          <h6 class="text-white">Untuk memastikan keabsahan ijazah anda, pastikan nomor ijazah anda dapat diverifikasi melalui SIVIL.
            Pastikan anda mengisi Perguruan Tinggi, Nomor Ijazah dan Angka pengaman dengan benar.
            Apabila nomor ijazah anda tidak terdaftar, silakan hubungi Perguruan Tinggi yang menerbitkan ijazah untuk memastikan data anda telah dilaporkan melalui PD-DIKTI.
            Pendataan PDDikti secara resmi dilakukan mulai pada tahun 2002/2003, bagi lulusan dibawah tahun tersebut apabila tidak ditemukan di SIVIL silakan hubungi Perguruan Tinggi masing-masing
          </h6>
					{{-- <div class="intro-wrap">

						<div class="row">
							<div class="col-12">
								<form class="form">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
											<select name="" id="" class="form-control custom-select">
												<option value="">Multimedia</option>
												<option value="">Rekayasa Perangkat Lunak</option>
												<option value="">Teknik Komputer Jaringan</option>
												<option value="">Teknik Pemesinan</option>
												<option value="">Brazil</option>
												<option value="">United States</option>
												<option value="">Israel</option>
												<option value="">China</option>
												<option value="">Russia</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
											<input type="text" class="form-control" name="text" placeholder="NISN">
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="text" class="form-control" placeholder="Isi Nomor Ijazah">
										</div>
									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" class="btn btn-primary btn-block" value="Search">
										</div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Save this search</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="text" placeholder="Nama:" disabled>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="text" placeholder="NISN:" disabled>
										</div>
									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control mt-3" name="text" placeholder="Jurusan:" disabled>
										</div>
										<div class="col-lg-6">
											<input type="text" class="form-control mt-3" name="text" placeholder="Tempat Lahir:" disabled>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> --}}
				</div>
				<div class="col-lg-7">
          <div class="intro-wrap">

						<div class="row">
							<div class="col-12">
                <form action="/searchdata" method="get">
                  @csrf
                  <input type="hidden" name="search" value="search">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                      <div class="form-group">
											<select name="" id="" class="form-control custom-select">
												<option value="">Multimedia</option>
												<option value="">Rekayasa Perangkat Lunak</option>
												<option value="">Teknik Komputer Jaringan</option>
												<option value="">Teknik Pemesinan</option>
												<option value="">Brazil</option>
												<option value="">United States</option>
												<option value="">Israel</option>
												<option value="">China</option>
												<option value="">Russia</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                      <div class="form-group">
											<input type="text" class="form-control" name="text" placeholder="NISN" required>
                    </div>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                      <div class="form-group">
											<input type="text" class="form-control" placeholder="Isi Nomor Ijazah" required>
                    </div>
										</div>
									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                      <div class="form-group">
                        <button class="btn btn-primary">Cari Data</button>
                    </div>
										<div class="col-lg-8">
											<label class="control control--checkbox mt-3">
												<span class="caption">Save this verification</span>
												<input type="checkbox" checked="checked" />
												<div class="control__indicator"></div>
											</label>
										</div>
                </form>
              @isset($searchsiswa)
              @if (empty($searchsiswa))
              <h1>Data yang anda masukan tidak valid</h1>
              @else
              @forelse ($searchsiswa as $item)
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="text" placeholder="Nama: {{ $item->namalengkap }}" disabled>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control" name="text" placeholder="NISN: {{ $item->NISN }}" disabled>
										</div>
									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-6">
											<input type="text" class="form-control mt-3" name="text" placeholder="Jurusan: {{ $item->jurusan }}" disabled>
										</div>
										<div class="col-lg-6">
											<input type="text" class="form-control mt-3" name="text" placeholder="Tempat Lahir: {{ $item->tempatlahir }}" disabled>
										</div>
                  @empty
                    <tr>
                    <th>Data Tidak Ada</th>
                    </tr>
                @endforelse
                @endif 
                @endisset
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="{{ asset('front') }}/js/jquery-3.4.1.min.js"></script>
	<script src="{{ asset('front') }}/js/popper.min.js"></script>
	<script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('front') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('front') }}/js/jquery.animateNumber.min.js"></script>
	<script src="{{ asset('front') }}/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('front') }}/js/jquery.fancybox.min.js"></script>
	<script src="{{ asset('front') }}/js/aos.js"></script>
	<script src="{{ asset('front') }}/js/moment.min.js"></script>
	<script src="{{ asset('front') }}/js/daterangepicker.js"></script>

	<script src="{{ asset('front') }}/js/typed.js"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('front') }}/js/custom.js"></script>

</body>

</html>
