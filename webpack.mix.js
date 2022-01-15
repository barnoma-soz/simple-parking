const mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/assets/js')
  .vue({ version: 3 });
