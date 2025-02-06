@extends('web.layout')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Contáctanos</h4>
                        </div>
                        <ul>
                            <li>y cultiva el cambio hacia una agricultura sostenible</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--==================================================-->
<!-- Strat Echofy Contact Area-->
<!--==================================================-->
<div class="contact-area">
	<div class="container">
		<div class="row contact-info-bg">
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-box">
					<div class="contact-info-icon">
						<img src="{{ asset('web/assets/images/inner-images/contact-info-icon-1.png')}}" alt="">
					</div>
					<div class="contact-info-content">
						<h4>Dirección</h4>
						<p>Av. Primavera pac. 293
                            lote 6 sector Arrabales
                            Subtanjalla - Ica - Perú
                            </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-box">
					<div class="contact-info-icon">
						<img src="{{ asset('web/assets/images/inner-images/contact-info-icon-2.png')}}" alt="">
					</div>
					<div class="contact-info-content">
						<h4>Haz un llamada</h4>
						<p>+51 987 654 321</p>
						<p>+51 987 654 321</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="contact-info-box two">
					<div class="contact-info-icon">
						<img src="{{ asset('web/assets/images/inner-images/contact-info-icon-3.png')}}" alt="">
					</div>
					<div class="contact-info-content">
						<h4>Envianos un mensaje</h4>
						<p>info@simbio.com.pe</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
