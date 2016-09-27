@extends('app')
@section('page_title', 'Our work is about Logo Design, Naming, Web Development, Design, UX, Advertising, Digital Strategy and more.')
@section('content')
	<div class="container-fluid">
		<div class="row inner-banner works">
			<div class="col-xs-12 inner-banner-text">
				<h1 class="azul"><a href="/proyecto/agua-maldita-mezcal" class="azul">AGUA MALDITA</a></h1>
				<p>
				Digital Strategy<br>
				Website <br>
				Social Networks Look &amp; Feel
				</p>
			</div>
		</div>
	</div>

	@include('partials.works-items')

@stop