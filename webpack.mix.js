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

mix.js(['resources/js/app.js',
    'resources/admin/cheatsheet/assets/dist/js/bootstrap.bundle.min.js',
    'resources/admin/cheatsheet/cheatsheet.js'], 'public/js')
    .postCss('resources/admin/cheatsheet/assets/dist/css/bootstrap.min.css', 'public/css')
    .postCss('resources/admin/cheatsheet/cheatsheet.css', 'public/css');

mix.copy('resources/admin/cheatsheet/img', 'public/img');
