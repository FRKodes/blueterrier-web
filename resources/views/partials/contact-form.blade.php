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