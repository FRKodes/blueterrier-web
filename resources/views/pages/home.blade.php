@extends('app')
@section('page_title', 'We make logo design, UX Design, Advertising and Web Development. Let\'s work together')
@section('content')	
	
	<div class="container-fluid">
		<div class="row banner">
			<div class="banner-home">
				<div class="item pistones"><div class="inner-element"><img src="/images/cocinero-pistones-banner.png" alt=""></div></div>
			</div>
			<div class="banner-text">
				<h2 class=""><span>We are passionate about we do, we love quality.</span></h2>
				<p>Focusing our passion for our work in one objective: YOUR SUCCESS! </p>
				<a href="/contact" class="text-center btn-container no-margin" title="Contact Us, hit us an email."><span class="btn-bt">Contact Us</span><span class="icon-flecha link"></span></a>
			</div>
		</div>
	</div>
	
	@include('partials.home-projects')

	@include('partials.home-services')

@stop