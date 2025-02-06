@extends('web.layout')

@section('content')

<!--==================================================-->
<!-- Start Echofy Hero Area -->
<!--==================================================-->


    <div class="breadcumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Sobre Nosotros</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--==================================================-->
<!-- Strat Echofy About Area -->
<!--==================================================-->
<div class="about-area home-two">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="about-thumb">
					<img src="{{ asset('web/assets/images/home2/about-thumb.png') }}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-right">
					<div class="section-title left">
						<h4>Conócenos</h4>
						<h1>Sobre Simbio</h1>
					</div>
				    <p class="about-desc " style="color: #00000a;">
                        SIMBIO PERÚ S.A.C. es una empresa líder en el mercado peruano dedicada a la
                        innovación en tecnologías microbianas especializadas que generan valor en la
                        agricultura orgánica y convencional. <br>
                        Forma parte del Grupo @Alimenta y del Grupo La Calera, contando con el
                        respaldo de más de 40 años de experiencia en agricultura en el Perú.
                    </p>

                    <div class="row">
                        <div class="about-item col-lg-6">
                            <div class="section-title left">
                                <h4>Misión</h4>
                            </div>
                            <p class="about-desc" style="color: #00000a;">
                                Innovar y contribuir con soluciones agrobiotecnológicas integrales, a la
                                medida de las necesidades de nuestros clientes y adaptables a los diversos
                                ecosistemas agrícolas. Brindando productos eficaces y de alta calidad
                                que contribuyan en la regeneración de suelos para una agricultura sostenible
                                y más productiva.
                            </p>
                        </div>
                        <div class="about-item col-lg-6">
                            <div class="section-title left">
                                <h4>Vision</h4>
                            </div>
                            <p class="about-desc" style="color: #00000a;">
                                Forma parte del Grupo @Alimenta y del
                                Grupo La Calera, contando con el
                                respaldo de más de 40 años de
                                experiencia en agricultura en el Perú.
                            </p>
                        </div>
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy About Area -->
<!--==================================================-->
<!--==================================================-->
<!-- Strat Echofy Project Area -->
<!--==================================================-->
<div class="project-area inner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4>Lo que nos mueve</h4>
					<h1>Nuestro enfoque</h1>
					<p class="about-desc mt-3" style="color: #00000a;">
                        En SIMBIO somos especialistas en el desarrollo de tecnologías, basadas en microorganismos
                        optimizados y metabolitos de interés para la agricultura, contando con más de 8 años
                        experiencia en el país, desde procesos de rigurosa investigación aplicada, hasta la incursión
                        en la actividad empresarial, teniendo como enfoque principal:
                    </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
						<img src="{{ asset('web/assets/images/imagen-6.png')}}" alt="">
					</div>
					<div class="project-content">
						<a href="javascript:void();">Regeneración de suelos degradados</a>
						<div class="project-shape" class="my-auto">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
						<img src="{{ asset('web/assets/images/imagen-1.png')}}" alt="">
					</div>
					<div class="project-content">
						<a href="javascript:void();">Conservar la inocuidad de los alimentos</a>
						<div class="project-shape" class="my-auto">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
                        <img src="{{ asset('web/assets/images/imagen-5.png')}}" alt="">
					</div>
					<div class="project-content">
						<a href="javascript:void();" class="my-auto">Mejorar la calidad de la fruta e incrementar la productividad</a>
						<div class="project-shape">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
                        <img src="{{ asset('web/assets/images/imagen-4.png')}}" alt="">
					</div>
					<div class="project-content">
						<a href="javascript:void();" class="my-auto">
                            Soluciones adaptadas a cada agroecosistema
                        </a>
						<div class="project-shape">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
                        <img src="{{ asset('web/assets/images/imagen-3.png')}}" alt="">
					</div>
					<div class="project-content">
						<a href="javascript:void();" class="my-auto">
                            Mitigación de metales pesados y reducción de pesticidas
                        </a>
						<div class="project-shape">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-project-box">
					<div class="project-thumb">
                        <img src="{{ asset('web/assets/images/imagen-2.png')}}" alt="">
					</div>
					<div class="project-content ">
						<a href="javascript:void();" class="my-auto">
                            Reemplazo de fertilizantes y agroquímicos
                        </a>
						<div class="project-shape">
							<img src="{{ asset('web/assets/images/home1/project-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Project Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Strat Echofy Testimonial Area-->
<!--==================================================-->
<div class="testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center">
					<h4>Con compromiso</h4>
					<h1>Los grandes retos <br> que afrontamos</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testimonial-list-1 owl-carousel">
			    <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testi-author">
                            <div class="testi-author-thumb">
                                <img src="{{ asset('web/assets/images/1.png') }}" class="rounded-circle" alt="">
                            </div>
                            <div class="testi-author-content">
                                <h4>Regeneración de suelo degradado</h4>
                            </div>
                        </div>
                        <p class="testi-desc" >
                            Suelos con baja fertilidad, poco contenido de materia
                            orgánica y nutrientes, afectados por productos químicos
                            que reducen la biodiversidad en la rizósfera. Además,
                            presentan problemas de compactación y erosión.
                        </p>
                    </div>
			    </div>
			    <div class="col-lg-12">
				    <div class="single-testimonial-box">
                        <div class="testi-author">
                            <div class="testi-author-thumb">
                                <img src="{{ asset('web/assets/images/2.png') }}" class="rounded-circle" alt="">
                            </div>
                            <div class="testi-author-content">
                                <h4>Nuevas condiciones del cambio climático y contaminación ambiental</h4>
                            </div>
                        </div>
                        <p class="testi-desc" >
                            El estrés abiótico, como temperaturas extremas, sequía y
                            metales, y el estrés biótico de plagas y enfermedades,
                            afectan el crecimiento y la actividad radicular. Además, la
                            contaminación de suelos y alimentos con pesticidas y
                            metales pesados limita la productividad y altera los
                            agroecosistemas.
                        </p>
				    </div>
			    </div>
                <div class="col-lg-12">
				    <div class="single-testimonial-box">
                        <div class="testi-author">
                            <div class="testi-author-thumb">
                                <img src="{{ asset('web/assets/images/3.png') }}" class="rounded-circle" alt="">
                            </div>
                            <div class="testi-author-content">
                                <h4>Biotecnología agrícola: Entendimiento y manipulación de microbiomas funcionales</h4>
                            </div>
                        </div>
                        <p class="testi-desc" >
                            Plantas mejoradas para atraer microbiomas beneficiosos,
                            con monocultivos que aumentan la susceptibilidad varietal.
                            Se busca reducir la huella de carbono y la dependencia de
                            productos químicos, promoviendo alternativas
                            ecoeficientes y más saludables.
                        </p>
				    </div>
			    </div>
                <div class="col-lg-12">
				    <div class="single-testimonial-box">
                        <div class="testi-author">
                            <div class="testi-author-thumb">
                                <img src="{{ asset('web/assets/images/4.png') }}" class="rounded-circle" alt="">
                            </div>
                            <div class="testi-author-content">
                                <h4>Producción mundial de alimentos, calidad e inocuidad</h4>
                            </div>
                        </div>
                        <p class="testi-desc" >
                            La producción de alimentos debe aumentar un 70% hacia
                            2050. Los rendimientos agrícolas suben, pero también lo
                            hacen los costos de producción. Las plagas generan
                            pérdidas y altos costos, y su resistencia por el uso excesivo
                            de químicos, junto con la alta demanda de fertilizantes,
                            agravan la situación.
                        </p>
				    </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="testi-shape">
		<img src="{{ asset('web/assets/images/home1/testi-shape.png') }}" alt="">
	</div>
</div>
<!--==================================================-->
<!-- Strat Echofy Testimonial Area-->
<!--==================================================-->

<!--==================================================-->
<!-- Strat Echofy Counter Area -->
<!--==================================================-->
<div class="counter-area">
	<div class="container">
		<div class="row">
		    <div class="col-lg-4 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
		    		<div class="conuter-icon">
		    			<img src="{{ asset('web/assets/images/Imagen-06.png') }}" width="50%" alt="">
		    		</div>
                    <div class="counter-content">
		    			<h4>Innovación</h4>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-lg-4 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
                    <div class="conuter-icon">
		    			<img src="{{ asset('web/assets/images/Imagen-07.png') }}" width="50%" alt="">
		    		</div>
                    <div class="counter-content">
		    			<h4>Cercanía</h4>
		    		</div>
		    	</div>
		    </div>
		    <div class="col-lg-4 col-md-6 col-sm-6">
		    	<div class="single-counter-box">
                    <div class="conuter-icon">
		    			<img src="{{ asset('web/assets/images/Imagen-08.png') }}" width="50%" alt="">
		    		</div>
                    <div class="counter-content">
		    			<h4>Calidad</h4>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Counter Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Strat Echofy Process Area -->
<!--==================================================-->
<div class="process-area">
	<div class="container">
		<div class="row align-items-center" id="poress-row">
			<div class="col-lg-6 col-md-12">
				<div class="porcess-thumb">
					<img src="{{ asset('web/assets/images/Imagen-05.png') }}" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="process-left">
					<div class="section-title left">
						<h4>Cómo lo hacemos</h4>
						<h1>Nuestro Core Business</h1>
						<p class="section-desc">
                            Construir microbiomas funcionales para potenciar la producción de alimentos
                            más saludables y nutritivos, así como mejorar significativamente los rendimientos
                            de los cultivos para abordar la seguridad alimentaria.
						</p>

                        <p class="testi-desc">
                            <strong>
                            “Desarrollamos innovación a partir del entendimiento de los microbiomas”
                            </strong>
                        </p>

                        <div class="about-list-item"
                            style="color: #a2ce00;
                                    font-size: 22px;
                                    line-height: 41px;">
                            <ul>
                                <li><strong><i class="bi bi-check"></i>Biodiversidad</strong></li>
                                <li><strong><i class="bi bi-check"></i>Funcionalidad</strong></li>
                                <li><strong><i class="bi bi-check"></i>Resistencia</strong></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Echofy Process Area -->
<!--==================================================-->

@endsection
