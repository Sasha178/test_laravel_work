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

mix.styles(['resources/admin/front/assets/css/bootstrap.min.css',
    'resources/admin/front/assets/css/font-awesome.min.css',
    'resources/admin/front/assets/css/animate.min.css',
    'resources/admin/front/assets/css/owl.carousel.css',
    'resources/admin/front/assets/css/owl.theme.css',
    'resources/admin/front/assets/css/owl.transitions.css',
    'resources/admin/front/assets/css/style.css',
    'resources/admin/front/assets/css/responsive.css',
], 'public/css/front.css');

mix.scripts(['resources/admin/front/assets/js/bootstrap.bundle.min.js',
    'resources/admin/front/assets/js/map.js',
    'resources/admin/front/assets/js/menu.js',
    'resources/admin/front/assets/js/owl.carousel.min.js',
    'resources/admin/front/assets/js/scripts.js',
], 'public/js/front.js');

mix.copy('resources/admin/front/assets/fonts', 'public/fonts');
mix.copy('resources/admin/front/assets/images', 'public/images');
