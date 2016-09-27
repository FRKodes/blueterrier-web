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

	<div class="container-fluid">
		<div class="row back-blue blanco">
			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ">
				{{ Form::open(['id'=>'contactForm', 'url'=>'/sendmail'])}}
				<div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
				    {!! Form::text('fullname', null, ['class' => 'form-control', 'placeholder'=>'Full Name', 'data-validate'=>'required']) !!}
				    <small class="text-danger">{{ $errors->first('fullname') }}</small>
				</div>

				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Email', 'data-validate'=>'required|email']) !!}
				    <small class="text-danger">{{ $errors->first('email') }}</small>
				</div>

				<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
				    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>'Phone Number']) !!}
				    <small class="text-danger">{{ $errors->first('phone') }}</small>
				</div>

				<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
				    {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder'=>'Subject']) !!}
				    <small class="text-danger">{{ $errors->first('subject') }}</small>
				</div>

				<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
				    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder'=>'Message']) !!}
				    <small class="text-danger">{{ $errors->first('message') }}</small>
				</div>
				
				<div class="form-group text-center">
					{{ Form::submit('Send', ['class'=>'btn btn-primary text-center btn-container no-margin']) }}
				</div>
				
				<div class="sent_mail_alert text-center"><span>Thanks!</span><br>We will be in contact with you as soon as possible.</div>
				<div class="alert-danger hidden-item">*Please fill the requred fields (fullname and email)</div>
				{{ Form::close()}}
			</div>
		</div>
	</div>

@stop

@section('maps')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2bxbHLtJj9agfUxeojUUiusyxKaxso8&callback=initMap"async defer></script>
@stop