<!DOCTYPE html>
<html>
    <head>
        @include('partials.metas')
        @include('partials.styles')
    </head>
    <body>
    	<header>
        	@include('partials.nav')
    	</header>
    	<section>
			@yield('content')
    	</section>
        <footer>
        	@include('partials.footer')
        </footer>
        <script src="{{ elixir('js/all.min.js')}}"></script>
        @yield('maps')
        @include('partials.google')
    </body>
</html>
