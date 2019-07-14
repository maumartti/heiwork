const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
	.scripts([
	  'resources/assets/dashboard/vendors/js/vendor.bundle.base.js',
	  'resources/assets/dashboard/vendors/chart.js/Chart.min.js',
	  'resources/assets/dashboard/vendors/raphael/raphael.min.js',
	  'resources/assets/dashboard/vendors/morris.js/morris.min.js',
	  'resources/assets/dashboard/js/off-canvas.js',
	  'resources/assets/dashboard/js/hoverable-collapse.js',
	  'resources/assets/dashboard/js/misc.js',
	  'resources/assets/dashboard/js/settings.js',
	  'resources/assets/dashboard/js/todolist.js',
	  'resources/assets/dashboard/js/dashboard.js'
		], 'public/js/scripts.js')
    //.sass('resources/sass/app.scss', 'public/css')
    .styles([
    	  'resources/assets/dashboard/vendors/mdi/css/materialdesignicons.min.css',
		  'resources/assets/dashboard/vendors/puse-icons-feather/feather.css',
		  'resources/assets/dashboard/vendors/css/vendor.bundle.base.css',
		  'resources/assets/dashboard/vendors/morris.js/morris.css',
		  'resources/assets/dashboard/css/style.css'
    	], 'public/css/all.css');
