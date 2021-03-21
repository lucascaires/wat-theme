const mix = require('laravel-mix');

mix
  .setPublicPath('assets')
  .postCss('src/app.css', 'assets', [
    require("@tailwindcss/jit"),
  ])
  .js('src/app.js', 'assets')