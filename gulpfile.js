var elixir = require('laravel-elixir');
require('laravel-elixir-stylus');

elixir(function(mix) {
	 mix.stylus('app.styl')
	 .styles([
		'public/css/bootstrap.css',
		'public/css/icons-font.css',
		'public/css/app.css'
	],'public/css/all.min.css', 'public/css')
	.scripts([
		'public/js/jquery.js',
		'public/js/bootstrap.min.js',
		'public/js/custom.js'
	],'public/js/all.min.js', 'public/js')
	.version(['public/css/all.min.css', 'public/js/all.min.js'])
	.browserSync({proxy: 'blueterrier.dev'});
});