<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Simbio</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/animate.css') }}" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/animated-text.css') }}" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/all.min.css') }}" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/flaticon.css') }}" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/theme-default.css') }}" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/meanmenu.min.css') }}" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/owl.transitions.css') }}" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('web/venobox/venobox.css ')}}" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('web/assets/css/responsive.css') }}" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="{{ asset('web/assets/js/vendor/modernizr-3.5.0.min.js') }}" ></script>
</head>

<body>

	<!-- loder -->
	<div class="loader-wrapper">
		<span class="loader"></span>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>

@include('web.navigation')


@yield('content')




<!--==================================================-->
<!-- Strat Echofy Footer Area-->
<!--==================================================-->
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer-social-address">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="footer-social-address-content">
								<h4>Síguenos en nuestras redes</h4>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="footer-social-icon">
								<ul>
								    <li><a href="https://www.facebook.com/simbioperu"><i class="fab fa-facebook-f"></i></a></li>
								    <li><a href="https://www.instagram.com/simbio.peru/#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://www.linkedin.com/company/simbioperu"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row add-footer-class">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="footer-logo">
					<a href="index.html"><img src="{{ asset('web/assets/images/logo.png')}}" width="160" alt="logo"></a>
				</div>
				<p class="footer-desc">Soluciones biológicas personalizadas para una agricultura sostenible.</p>
				<div class="footer-contect-info">
					<ul>
						<li><i class="bi bi-envelope-open-fill"></i>info@simbio.com.pe</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Productos</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Linea Killer</a></li>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Linea Rizo</a></li>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Linea Nue</a></li>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Linea Native</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Servicios</h4>
					</div>
					<div class="footer-widget-menu">
						<ul>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Hecho a la medida</a></li>
							<li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i>Línea blanca</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row footer-bottom">
				<div class="col-md-12 text-center">
					<div class="footer-bottom-content">
						<h4>© Copyrights <script>document.write(new Date().getFullYear());</script> Simbio todos los derechos reservados.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Footer Area-->
<!--==================================================-->



<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->
<div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 0;"></path>
        </svg>
 </div>
<!--==================================================-->
<!-- End scrollup section Section -->
<!--==================================================-->



	<!-- jquery js -->
	<script src="{{ asset('web/assets/js/vendor/jquery-3.6.2.min.js ')}} "></script>
	<script src="{{ asset('web/assets/js/popper.min.js ')}}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('web/assets/js/bootstrap.min.js ')}}"></script>
	<!-- carousel js -->
	<script src="{{ asset('web/assets/js/owl.carousel.min.js ')}}"></script>
	<!-- counterup js -->
	<script src="{{ asset('web/assets/js/jquery.counterup.min.js ')}}"></script>
	<!-- waypoints js -->
	<script src="{{ asset('web/assets/js/waypoints.min.js ')}}"></script>
	<!-- wow js -->
	<script src="{{ asset('web/assets/js/wow.js')}}"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('web/assets/js/imagesloaded.pkgd.min.js ')}}"></script>
	<!-- venobox js -->
	<script src="{{ asset('web/venobox/venobox.js')}}"></script>

	<!--  animated-text js -->
	<script src="{{ asset('web/assets/js/animated-text.js ')}}"></script>
	<!-- venobox min js -->
	<script src="{{ asset('web/venobox/venobox.min.js')}}"></script>
	<!-- isotope js -->
	<script src="{{ asset('web/assets/js/isotope.pkgd.min.js ')}}"></script>
	<!-- jquery meanmenu js -->
	<script src="{{ asset('web/assets/js/jquery.meanmenu.js ')}}"></script>

	<!-- jquery scrollup js -->
	<script src="{{ asset('web/assets/js/jquery.scrollUp.js ')}}"></script>
	<!-- theme js -->
	<script src="{{ asset('web/assets/js/theme.js ')}}"></script>
    <!-- coustom js -->
	<script src="{{ asset('web/assets/js/coustom.js ')}}"></script>
	<!-- barfiller -->
	<script src="{{ asset('web/assets/js/jquery.barfiller.js ')}}"></script>
	<!-- barfiller -->
	<script src="{{ asset('web/assets/js/vanilla-tilt.min.js ')}}"></script>
	<script src="{{ asset('web/assets/js/silik-slider.js ')}}"></script>

</body>
</html>
