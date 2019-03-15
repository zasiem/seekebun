<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SeeKebun | Your Agrowisata Choice</title>

	<link rel="icon" href="{{ asset('image/seekebun-black.png') }}">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<a class="navbar-brand" href="/landing"><img src="{{ asset('image/seekebun-white.png') }}" alt="" width="100px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#about">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#fitur">Fitur</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#reason">Alasan</a>
				</li>
			</ul>
			<!-- <div class="form-inline my-2 my-lg-0">

				<button class="btn btn-outline-success my-2 my-sm-0">Login</button>
				<button class="btn btn-outline-success my-2 my-sm-0">Sign Up</button>
			</div> -->
		</div>
	</nav>
	<header>
		<div class="fluid-container">
			<div class="row header">
				<div class="col-xl-12">
					<h1>SeeKebun</h1>
					<p>Informasi dan Pengembangan destinasi agrowisata di Banyuwangi.</p>
					<hr>
				</div>
			</div>
		</div>
	</header>
<!-- 	<svg width="100%" height="100%" viewBox="0 0 1440 123" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M700.391 75.2791C156.282 -26.9418 110.447 67.9435 0 75.2791V0H1440V75.2791C1316.48 82.6147 1244.5 177.5 700.391 75.2791Z" fill="#60AB68"/>
	</svg> -->

	<div class="fluid-container" id="about">
		<div class="tentang">
			<h2>Apa itu <span>SeeKebun</span> ?</h2>
			<hr>
			<div class="row">
				<div class="col-xl-5">
					<img src="{{ asset('/image/seekebun-black.png') }}" alt="" height="300px">
				</div>
				<div class="col-xl-7">
					<p><b>Seekebun.id</b> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos magnam vitae possimus labore est perferendis, doloribus ipsum similique perspiciatis? Iusto, sunt assumenda incidunt minima amet eligendi illum perspiciatis impedit maiores!</p>
				</div>
			</div>	
		</div>
	</div>


	<div class="fluid-container" id="fitur">
		<div class="fitur">
			<h2>Fitur Aplikasi</h2>
			<hr>
			<div class="row">
				<div class="col-xs-12 card-group">
					<?php 

					for ($i=0; $i < 3; $i++) { 

						?>
						<div class="card">
							<img class="card-img-top" src="{{asset('image/1.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Mitra</h5>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis natus recusandae dicta quisquam minima, voluptates necessitatibus perspiciatis quos fugiat molestias corrupti veritatis, sapiente rerum non, hic eos nesciunt inventore. Ad.</p>
							</div>
						</div>

						<?php 
					}

					?>

				</div>
			</div>
		</div>

	</div>

	<div class="fluid-container" id="reason">
		<div class="alasan">
			<h2>Mengapa Memilih <span>SeeKebun</span></h2>
			<hr>
			<div class="row">
				<div class="col-xs-12 card-group">
					<?php 

					for ($i=0; $i < 3; $i++) { 

						?>
						<div class="card">
							<img class="card-img-top" src="{{asset('image/1.jpg')}}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Gratis</h5>
							</div>
						</div>

						<?php 
					}

					?>

				</div>
			</div>
		</div>

	</div>
	
	<footer>
		<div class="fluid-container">
			<div class="row footer">
				<div class="col-xl-12">
					
				</div>
			</div>
		</div>
	</footer>






</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
