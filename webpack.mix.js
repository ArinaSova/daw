const mix = require('laravel-mix');


mix.js('node_modules/jquery/dist/jquery.js', 'public/js/')
mix.js('node_modules/owl.carousel/dist/owl.carousel.js','public/js/')
mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/')
