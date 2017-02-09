var elixir = require('laravel-elixir');

var assetsPath = elixir.config.assetsPath = 'themes/2016/assets/';
var publicPath = elixir.config.publicPath = 'themes/2016/assets/public/';

// Root path from assets dir
var rootPath = '../../../../'

elixir(function(mix) {
	// mix.copy('node_modules/test', 'test');
	mix.copy('node_modules/bootstrap', assetsPath + 'vendor/bootstrap');
	mix.copy('node_modules/tether', assetsPath + 'vendor/tether');
	mix.copy('node_modules/ellipsis.js', assetsPath + 'vendor/ellipsis');
	mix.copy('node_modules/font-awesome', assetsPath + 'vendor/font-awesome');
	mix.copy('node_modules/font-awesome/fonts', publicPath + 'fonts');
	mix.sass([
		'app.scss',
		])
	.webpack(['app.js'], publicPath + 'js/app.js');
	/* .webpack(
		[input files], 
		{webpack onfig goes here (https://www.npmjs.com/package/laravel-elixir-webpack#advanced-example)},
		output file
		);
	*/
});