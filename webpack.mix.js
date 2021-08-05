const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.scss', 'public/css')
 .js('resources/js/bootstrap.js', 'public/js')
 .js('resources/js/script-map.js', 'public/js')
 .js('resources/js/script-modal.js', 'public/js')
 .sass('resources/sass/style.scss', 'public/css')
 .sass('resources/sass/stylePdf.scss', 'public/css')
 .postCss('resources/css/app.css', 'public/css', [
 require('postcss-import'),
 require('tailwindcss'),
 require('autoprefixer'),
 ]);
 