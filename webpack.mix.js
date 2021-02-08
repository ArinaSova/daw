const mix = require('laravel-mix');



mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css');
