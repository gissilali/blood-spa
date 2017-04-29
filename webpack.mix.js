const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/routes.js', 'public/js/app.js')
   .js('resources/assets/js/form-validator.js', 'public/js/app.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/styles.scss', 'public/css')
   .sass('resources/assets/sass/config.scss', 'public/css');
