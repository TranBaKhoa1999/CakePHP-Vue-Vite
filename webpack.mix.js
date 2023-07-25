const mix = require('laravel-mix');

mix.setPublicPath('./webroot')
    .js('frontend/main.js', 'webroot/js')
    .combine([
        'frontend/main.css',
    ], 'webroot/css/main.css')
    .version();
