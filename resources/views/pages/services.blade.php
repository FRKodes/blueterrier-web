@extends('app')
@section('page_title', 'Keep an eye to the services we, have to help you to conquer the most demanding market.')
@section('content')
	<div class="container-fluid" style="overflow: hidden;">
		
		<div class="row inner-banner services">
			<div class="col-xs-12 inner-banner-text">
				<h1>Let's get to the top together</h1>
				<p>Keep an eye to the services we have to help you to conquer the most demanding market.</p>
				<div class="arrow-down-btn"><span class="icon-flecha"></span></div>
			</div>
		</div>
		
		@include('partials.services-buttons')
		
	</div>
	
	@include('partials.services-info-containers')

	<div class="container down">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<span class="icon-logobt"></span>
				<p>Do you know more?</p>
				<p class="gris1">Send us an email, we are sure we find out the solution for your challenge. <br> <a href="mailto:info@blueterrier.mx" class="gris1" title="Hit us an email, we will help you.">info@blueterrier.mx</a></p>
			</div>
		</div>
	</div>

@stop