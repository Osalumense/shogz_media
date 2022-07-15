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
    .copyDirectory("resources/js/vendor", "public/js/vendor")
    .copyDirectory("resources/css/css", "public/css/css")
    .copyDirectory("resources/css/scss", "public/css/scss")
    .copyDirectory("resources/css/vendor", "public/css/vendor")
    .copyDirectory("resources/css/style.css", "public/css")
    .copyDirectory("resources/images", "public/images")
    .js('resources/js/main.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
