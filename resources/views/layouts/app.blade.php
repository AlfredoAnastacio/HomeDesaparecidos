<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- bootstrap -->
		{!! Html::style('assets-master/dist/css/bootstrap.css') !!}
		<!-- icons-fontawesome -->
		{!! Html::style('assets-master/icons/font-awesome/css/font-awesome.min.css') !!}
		<!-- custom style -->
		{!! Html::style('assets-master/style.css') !!}
		<!-- tipografía oficial -->
		{!! Html::style('assets-master/css/font-neosans.css') !!}
		<title>Document</title>
</head>
<body>
		<nav class="bg-dark">
			<div class="container">
				<ul class="nav justify-content-end navbar-dark">
					<li class="nav-item">
						<a class="nav-link active social-icon" href="mailto:contacto@fiscaliaveracruz.gob.mx"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link social-icon" href="facebook.com/fgeveracruz/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link social-icon" href="youtube.com/channel/UC464yhyQ9Zc6FYkPyN69cgA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					</li>
					<li class="nav-item social-icon">
						<a class="nav-link disabled" href="twitter.com/FGE_Veracruz"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</nav>    <!-- social menu -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top nav-sh">
			<div class="container">
				<a class="navbar-brand" href="index.html">
						<img src="img/logo-fge-svg.svg" alt="fiscaliaveracruz.gob.mx" style="height: 80px">
				</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="nosidebar.html">No Sidebar</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="pageblank.html">Page Blank</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="404.html">404</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.html">logout</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Dropdown link
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
					</div>
			</div>       
		</nav> <!-- menú -->
				
		<div class="bg-300">
			<nav aria-label="breadcrumb" class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Inicio</li>
					</ol>
			</nav>
		</div>           
		<!-- breadcrumb -->    

		<section class="container my-4 wrapper">
			<div class="row">
				@yield('content')
			</div>
											
		</section>    <!-- END-CONTENT -->

		<section class="py-5 pre-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<h4 class="footer-title">Footer 1</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-12 col-md-4">
						<h4 class="footer-title">Footer 2</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-12 col-md-4">
						<h4 class="footer-title">Contacto</h4>
						<p>Circuito Rafael Guízar y Valencia No. 707, Colonia Reserva Territorial C.P. 91096 Xalapa, Veracruz. 
										Teléfono: 01 228 841 6170 
										contacto@fiscaliaveracruz.gob.mx</p>
					</div>
				</div>
			</div>
		</section>    <!-- END-PREFOOTER -->

		<footer class="bg-secondary border-top py-3">
			<div class="container">
				 <small>Copyright © 2018 Fiscalía General del Estado de Veracruz, DCIIT. | Avisos de Privacidad</small> 
			</div>
		</footer><!-- END-FOOTER -->

		<!-- <a href="#top" class="to-top">Top</a> -->

		{!! HTML::script('assets-master/js/') !!}
		<script src="js/main.js"></script> <!-- to-top jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>