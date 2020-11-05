require('laravel-mix-purgecss');
const mix = require('laravel-mix');


mix
  .setPublicPath('assets')
  .postCss('src/app.css', 'assets', [
    require('tailwindcss'),
  ])
  .js('src/app.js', 'assets')


if (mix.inProduction()) {
  mix.purgeCss().version()
}