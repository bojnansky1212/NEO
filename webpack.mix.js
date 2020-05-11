let mix = require('laravel-mix');
let webpack = require('webpack');

mix.webpackConfig({
	plugins: [
		new webpack.ProvidePlugin({
		  '$': 'jquery',
		  'jQuery': 'jquery',
		  'window.jQuery': 'jquery'
		}),
	]
});
mix.setPublicPath('dist');

mix.js('src/js/app.js', 'dist/js')
   .sass('src/sass/app.scss', 'dist/css')
   .copyDirectory('src/images', 'dist/images')
   .copyDirectory('src/fonts', 'dist/fonts')
   .copy('src/components/*.php', 'dist/components')
   .copy('src/*.php', 'dist');
