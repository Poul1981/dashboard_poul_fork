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
    .sass('resources/sass/app.scss', 'public/css')
    .js("resources/js/users.js", "public/js") // add this
    // .sourceMaps();

    //для работы дашборда js
    .js('resources/js/adminlte.min.js','public/js')
    .js('resources/js/bootstrap.bundle.min.js','public/js')
    .js('resources/js/jquery.min.js','public/js')
    .js('resources/js/myScripts.js','public/js')
    //css для дашборда
    .css('resources/css/adminlte.min.css', 'public/css')
    .css('resources/css/all.min.css', 'public/css')
    .css('resources/css/fontawesome.css', 'public/css')
    .css('resources/css/mystyle.css', 'public/css');
