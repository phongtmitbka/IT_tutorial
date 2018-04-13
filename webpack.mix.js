let mix = require('laravel-mix');

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

mix.js('resources/assets/js/home/app.js', 'public/js/home')
    .js('resources/assets/js/poster/app.js', 'public/js/poster')
    .js('resources/assets/js/admin/app.js', 'public/js/admin')
    .sass('resources/assets/sass/app.scss', 'public/css');
