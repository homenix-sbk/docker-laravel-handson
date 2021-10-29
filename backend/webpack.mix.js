const mix = require('laravel-mix');
const glob = require('glob');
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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

glob.sync('resources/sass/*.scss').map(function(file) {
    mix.sass(file, 'public/css').options({
        processCssUrls: false,
    });
});

mix.browserSync({
    proxy: {
        target: "http://127.0.0.1",
    },
    files: [
        'resources/views/*.blade.php',
        'resources/views/**/**/*.blade.php',
        'resources/sass/*.scss',
        'resources/sass/import/*.scss',
        'resources/js/app.js',
    ],
});