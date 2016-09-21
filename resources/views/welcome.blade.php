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
			@include('pages.home')
    	</section>
        <footer>
        	@include('partials.footer')
        </footer>
        <script href="{{ elixir('js/all.min.js')}}"></script>
    </body>
</html>
