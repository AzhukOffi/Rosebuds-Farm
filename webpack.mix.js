let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('public/js/soft-ui-dashboard-tailwind.js', 'public/js')
.sass('public/css/soft-ui-dashboard-tailwind.css', 'public/css');