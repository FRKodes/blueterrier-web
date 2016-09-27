@extends('app')
@section('page_title', 'Interested in working together or just want to say hello? We are here for you!')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div id="map"></div>
		</div>
	</div>

	<div class="container contact">
		<div class="row">
			<h1 class="azul text-center">Contact Us!</h1>

			<p class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">Interested in working with us? Or just want to say hello?</p>

			<p class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				Please use the contact form below or send us an email to <a href="mailto:info@blueterrier.mx" class="gris1">info@blueterrier.mx</a> We will be in contact with you as soon as we can.
			</p>
		</div>
	</div>

	@include('partials.contact-form')

@stop

@section('maps')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"async defer></script>
@stop