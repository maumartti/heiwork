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
	  'resources/assets/dashboard/vendors/dropify/dropify.min.js',
	  'resources/assets/dashboard/vendors/jquery-file-upload/jquery.uploadfile.min.js',
	  'resources/assets/dashboard/vendors/jquery-tags-input/jquery.tagsinput.min.js',
	  'resources/assets/dashboard/vendors/dropzone/dropzone.js',
	  'resources/assets/dashboard/js/off-canvas.js',
	  'resources/assets/dashboard/js/hoverable-collapse.js',
	  'resources/assets/dashboard/js/settings.js',
	  'resources/assets/dashboard/js/todolist.js',
	  'resources/assets/dashboard/js/dashboard.js',
	  'resources/assets/dashboard/js/dropify.js',
	  'resources/assets/dashboard/js/dropzone.js',
	  'resources/assets/dashboard/js/tooltips.js',
	  'resources/assets/dashboard/js/popover.js'
		], 'public/js/scripts.js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
    	  'resources/assets/dashboard/vendors/flag-icon-css/css/flag-icon.min.css',
    	  'resources/assets/dashboard/vendors/mdi/css/materialdesignicons.min.css',
		  'resources/assets/dashboard/vendors/puse-icons-feather/feather.css',
		  'resources/assets/dashboard/vendors/css/vendor.bundle.base.css',
		  'resources/assets/dashboard/vendors/morris.js/morris.css',
		  'resources/assets/dashboard/vendors/dropify/dropify.min.css',
		  'resources/assets/dashboard/vendors/jquery-file-upload/uploadfile.css',
		  'resources/assets/dashboard/css/style.css'
    	], 'public/css/all.css');

