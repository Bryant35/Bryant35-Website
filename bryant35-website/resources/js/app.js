import './bootstrap';

const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')  // Compile your JavaScript
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),  // Process with Tailwind CSS
   ]);
