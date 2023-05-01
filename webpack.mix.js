const { postCss } = require('laravel-mix');
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
    .vue()
    //  .postCss('resources/css/css/animate.min.css','public/css')
    //  .postCss('resources/css/css/bootstrapcss','public/css')
    //  .postCss('resources/css/css/bootstrap.min.css','public/css')
    //  .postCss('resources/css/css/bootstrap-grid.css','public/css')
    //  .postCss('resources/css/css/bootstrap-grid.min.css','public/css')
    //  .postCss('resources/css/css/bootstrap-reboot.css','public/css')
    //  .postCss('resources/css/css/bootstrap-reboot.min.css','public/css')
    //  .postCss('resources/css/css/default-skin.css','public/css')
    //  .postCss('resources/css/css/font-awesome.min.css','public/css')
    //  .postCss('resources/css/css/icomoon.css','public/css')
    //  .postCss('resources/css/css/jquery.fancybox.min.css','public/css')
    //  .postCss('resources/css/css/jquery.mCustomScrollbar.min','public/css')
    //  .postCss('resources/css/css/jquery-ui','public/css')
    //  .postCss('resources/css/css/meanmenu.css','public/css')
    //  .postCss('resources/css/css/normalize.css','public/css')
    //  .postCss('resources/css/css/owl.carousel.min.css','public/css')
    //  .postCss('resources/css/css/responsive.css','public/css')
    //  .postCss('resources/css/css/slick.css','public/css')
    //  .postCss('resources/css/css/style.css','public/css')
    //  .postCss('resources/css/css/bootstrap.css.map','public/css')
    //  .postCss('resources/css/css/bootstrap.min.css.map','public/css')
    //  .postCss('resources/css/css/bootstrap-grid.css.map','public/css')
    //  .postCss('resources/css/css/bootstrap-grid.min.css.map','public/css')
    //  .postCss('resources/css/css/bootstrap-reboot.css.map','public/css')
    //  .postCss('resources/css/css/bootstrap-reboot.min.css.map','public/css')
    //  .postCss('resources/css/css/animate.min.css','public/css')
     .postCss('resources/css/header.css','public/css')
     .postCss('resources/css/app1.css','public/css')
     .postCss('resources/css/app2.css','public/css')
     .postCss('resources/css/app3.css','public/css')
     .postCss('resources/css/styletableau.css','public/css')
     .postCss('resources/css/app.css', 'public/css'
    , [
    
        require('tailwindcss'),
        //
    ]);
