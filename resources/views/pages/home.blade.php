@extends('app')

@section('content')	
	<div class="container-fluid">
		<div class="row banner">
			<div class="banner-home">
				<div class="item pistones"><div class="inner-element"><img src="/images/cocinero-pistones-banner.png" alt=""></div></div>
			</div>
			<div class="banner-text">
				<h2 class=""><span>Nos apasiona lo que hacemos, amamos la calidad.</span></h2>
				<p>Nuestra pasión por el trabajo que realizamos lo enfocamos en un sólo objetivo: ¡TU ÉXITO!</p>
				<a href="/contact" class="text-center btn-container no-margin" title="Contact Us, hit us an email."><span class="btn-bt">Contact Us</span><span class="icon-flecha link"></span></a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row works-home">
			<div class="col-xs-12">
				<div class="item-work kamado"><img src="/images/kamado.png" alt="kamado" class="wood"></div>
				<div class="item-work agua-maldita"><img src="/images/agua-maldita-project.png" alt="agua maldita project" class=""></div>
				{{-- <div class="item-work boreal"><img src="/images/boreal-project.png" alt="boreal project"></div>
				<div class="item-work otro hidden-xs"><img src="/images/kamado.png" alt="kamado"></div> --}}
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<a href="/works" class="text-center btn-container" title="Contact Us, hit us an email."><span class="btn-bt">Works</span><span class="icon-mas link"></span></a>  
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="services-home-container">
				<div class="item-services col-sm-6 col-md-3">
					<div class="icon-service icon-webdesign"></div>
					<h2 class="title text-center azul">WEB DESIGN</h2>
					<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur officiis alias aut eius dolores.</div>
				</div>
				<div class="item-services col-sm-6 col-md-3">
					<div class="icon-service icon-log"></div>
					<h2 class="title text-center azul">LOGO DESIGN</h2>
					<div class="description">“From zero to Hero” Danos la oportunidad de sorprenderte con algo impresionante.</div>
				</div>
				<div class="item-services col-sm-6 col-md-3">
					<div class="icon-service icon-advertising"></div>
					<h2 class="title text-center azul">DESIGN AND ADVERTISING</h2>
					<div class="description">Etiquetas, packaging, papelería, brochures, editorial… te sorprenderemos!</div>
				</div>
				<div class="item-services col-sm-6 col-md-3">
					<div class="icon-service icon-outsourcing"></div>
					<h2 class="title text-center azul">WEB DEVELOPMENT</h2>
					<div class="description">100% responsive, código limpio y optimizado para buscadores.</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
				<a href="/services" class="text-center btn-container" title="Check out our services."><span class="btn-bt">Servicios</span><span class="icon-mas link"></span></a>  
			</div>
		</div>
	</div>
@stop