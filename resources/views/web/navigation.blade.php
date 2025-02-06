<!--==================================================-->
<!-- Start Echofy Header Area -->
<!--==================================================-->
<div class="header-area" id="sticky-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="header-logo">
					<a href="{{ route('home') }}">
						<img src="{{ asset('web/assets/images/logo.png')}}" alt="logo" width="160">
					</a>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="header-menu">
					<ul>
						<li><a href="{{ route('home') }}">Inicio</a></li>
						<li><a href="{{ route('empresa') }}">Empresa</a></li>

						<li class="menu-item-has-children">
							<a href="{{ route('productos') }}">Productos<i class="fas fa-chevron-down"></i></a>
                           <ul class="sub-menu">
					      	  <!-- <li><a href="about.html">About</a></li> -->
						   </ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Servicios<i class="fas fa-chevron-down"></i></a>
                           <ul class="sub-menu">
					      	  <!-- <li><a href="about.html">About</a></li> -->
						   </ul>
						</li>
					</ul>
					<div class="header-button">
						<a href="{{ route('contactanos') }}">Contacto</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Header Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Main Menu Area -->
<!--==================================================-->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="header-menu">
			<ul class="nav_scroll">
				<li><a href="{{ route('home') }}">Inicio</a></li>
				<li><a href="javascript:void(0);">Empresa</a></li>
				<li class="menu-item-has-children"><a href="#">Productos</a>
                   <ul class="sub-menu">
			      	  <!-- <li><a href="about.html">About</a></li> -->
				   </ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#">Servicios</a>
					<ul class="sub-menu">
						<!-- <li><a href="blog-grid.html">Blog Grid</a></li> -->
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!--==================================================-->
<!-- End Main Menu Area -->
<!--==================================================-->
