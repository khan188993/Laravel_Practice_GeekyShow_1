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

    /* 
    ?process of resourse install by npn resourse folder,
    *)install node.js,
    *)after install node js install npm by [npm install] in your laravel project folder,
    *)make css and js file into your resource folder
    *)add your css and js file into webpace.mix.js file
    *)run [nmp run dev] / [npm run pro] [npm run watch]
    *)see your public folder css and file will be compiled.
    *)now if you change something in your resource file it will compiled to your public assets file,
    */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/my.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')

    .postCss('resources/css/my.css', 'public/css')
    .postCss('resources/css/style.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css',);
