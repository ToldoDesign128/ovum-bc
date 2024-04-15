// webpack.mix.js
let mix = require('laravel-mix');

mix.sass('assets/css/style.scss', 'style.css');

mix.combine(
  ['assets/js/js-parts/animation.js',
    'assets/js/js-parts/menu.js',
    'assets/js/js-parts/prima-dopo.js',
    'assets/js/js-parts/swiper.js'],
  'scripts.js')
  .minify('scripts.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});